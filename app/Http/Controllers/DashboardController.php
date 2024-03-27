<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventoryModel;

class DashboardController extends Controller
{
    public function index(){
        $inventory = inventoryModel::all();
        return view('dashboard', compact('inventory'));
    }
}
