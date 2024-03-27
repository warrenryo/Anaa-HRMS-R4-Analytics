<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\inventoryModel;
use RealRashid\SweetAlert\Facades\Alert;

class inventoryitemsController extends Controller
{
    public function store_items(){
        $category = CategoryModel::all();
        $item = inventoryModel::paginate(10);
        return view('inventory.items', compact('category', 'item'));
    }
    public function store_items2(){
        $category = CategoryModel::all();
        $item = inventoryModel::paginate(10);
        return view('inventory.stocks', compact('category', 'item'));
    }

    public function addItem(Request $request){
    $item = new inventoryModel;

    $normal = 'Normal';
    



    if($item){
        $item->create([
            'r4_category_name' => $request['category'],
            'r4_item_name' => $request['item_name'],
            'r4_quantity' =>$request['quantity'], // Limit quantity to maximum
            'r4_status' => $normal,
        ]);

        Alert::success('Success','Items added to inventory');
        return redirect()->back();
    } else {
        Alert::error('error','Error');
        return redirect()->back();
    }
}

public function updateItem(Request $request, $id){
    $item = inventoryModel::find($id);
    $normal = 'Normal';
    



    if($item){
        $item->update([
            'r4_category_name' => $request['category'],
            'r4_item_name' => $request['item_name'],
            'r4_quantity' => $request['quantity'], // Limit quantity to maximum
            'r4_status' => $normal,
        ]);
        Alert::success('Success','Items has been updated');
        return redirect()->back();
    } else {
        Alert::error('error','Error');
        return redirect()->back();
    }
}



    public function deleteItem($id){
        $item = inventoryModel::find($id);

        if($item){
            $item->delete();

            Alert::success('Success','Item has been deleted');
            return redirect()->back();
        }
    }
}