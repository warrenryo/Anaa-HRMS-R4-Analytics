<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class InventoryController extends Controller
{
    public function index(){
        $category = CategoryModel::all();
        return view('inventory.inventoryindex', compact('category'));
    }
    public function createcategory(Request $request){
        $category = new CategoryModel;

        try {
            $create_category = $category->create([
                'category_name' => $request['category']
            ]);
            if($create_category){
            Alert::success('sucess', 'category added successfully');
            return redirect()->back();

            } else {
                Alert::error('error', 'something went wrong');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return redirect()->back();
        }
    }


    public function update(Request $request, $id){
        $category = CategoryModel::find($id);
        
        $category->update([
            'category_name' => $request['category']
        ]);

        Alert::success('Success', 'Category has been updated.');
        return redirect()->back();
    }

    public function delete(Request $request, $id){
        $category = CategoryModel::find($id);

        $category->delete();
        Alert::success('Success', 'Category deleted successfully');
        return redirect()->back();
    }
}