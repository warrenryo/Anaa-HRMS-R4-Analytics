<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function anaviews(){
        return view('feedback.Reports');   
    }
}
