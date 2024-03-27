<?php

namespace App\Http\Controllers;

use App\Models\Reorder;
use Illuminate\Http\Request;
use App\Models\inventoryModel;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\inventoryitemsController;

class ReorderPointsController extends Controller
{
    public function index(Request $request)
    {
        $low_stock = 50;

        $reorder = inventoryModel::when($request['filter_status'] != null, function ($q) use ($request) {
            $q->where('r4_status', $request['filter_status'])->orderBy('id', 'DESC');
        })
            ->where('r4_quantity', '<=', $low_stock)->paginate(10);
        return view('reorderPoints.reorderIndex', compact('reorder'));
    }

    public function submitReorder(Request $request, $id)
    {
        $item = inventoryModel::find($id);

        try {
            $response = Http::post('http://192.168.101.72:8000/api/logistics', [
                'consumer' => 'ANAA Hotel and Restaurant',
                'item_id' => $item->id,
                'category' => $item->r4_category_name,
                'item_name' => $item->r4_item_name,
                'quantity' => $request['quantity'],
                'status' => 'Pending'
            ]);

            if ($response->successful()) {
                $pending_order = 'Pending Order';
                $item->update(['r4_status' => $pending_order]);
                Alert::success('Order Submitted', 'Your order has been submitted to the logistics');
                return redirect()->back();
            } else {
                Alert::error('Error', 'Something went wrong');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Error', $th->getMessage());
            return redirect()->back();
        }
    }

    public function reorderStatusIndex()
    {
        $reorder = Reorder::where('status', 'Pending ')
            ->orWhere('status', 'Approved')
            ->orWhere('status', 'On-Delivery')
            ->orWhere('status', 'Pending Complete')
            ->orWhere('status', 'Completed')
            ->orWhere('status', 'Claimed')->get();
        return view('reorderPoints.reorderStatusIndex', compact('reorder'));
    }
}
