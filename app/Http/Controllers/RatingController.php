<?php
namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        

        $rating = new Rating();
        $rating->rating = $request->rating;
        $rating->comment = $request->comment;
        $rating->name = $request->name;
        $rating->save();
        Alert::success('Success', 'Your feedback has been submitted');
        return redirect()->back();
    }
    public function store2(Request $request)
    {
        

        $rating = new Rating();
        $rating->rating = $request->rating;
        $rating->comment = $request->comment;
        $rating->name = $request->name;
        $rating->save();
        Alert::success('Success', 'Your feedback has been submitted');
        return redirect()->back();
    }

};