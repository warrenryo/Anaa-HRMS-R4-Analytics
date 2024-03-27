<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restoReviewController extends Controller
{
    public function restoviewReviewIndex(){
        return view('feedback.restaurantreviews');  
    }
}
