<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventoryModel;

class analyticsController extends Controller
{
    public function anaalytics(){
        $inventory = inventoryModel::all();
        return view("feedback.analytics", compact('inventory'));
    }

}
