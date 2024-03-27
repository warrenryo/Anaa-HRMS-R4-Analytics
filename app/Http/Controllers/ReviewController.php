<?php

namespace App\Http\Controllers;

use App\Models\rating;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
      
        return view('feedback.index');
    }
    
    public function viewReviewIndex(){
        $rates = rating::all();
        return view('admin.reviews.review_index', compact('rates'));
    }
    public function feedbackbooking()
    {
      
        return view('feedback.feedbackbooking');
    }
    
    public function viewReviewbooking(){
        $rates = rating::all();
        return view('admin.reviews.review_indexbooking', compact('rates'));
    }
}
