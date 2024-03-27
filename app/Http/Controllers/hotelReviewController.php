<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class hotelReviewController extends Controller
{
    public function hotelviewReviewIndex()
    {
        $response = Http::get('http://192.168.191.85:8000/api/room-reviews');

        // Check if the request was successful
        if ($response->successful()) {
            // Parse the JSON response
            $data = $response->json();

            // Access the "reviews" field if it exists
            if (isset ($data['reviews'])) {
                $reviews = $data['reviews'];

                // Pass the reviews data to the view and return it
                return view('feedback.hotelreview', compact('reviews'));
            } else {
                // Handle case when 'reviews' field is not present in the response
                // For example, return an error view
                return view('error');
            }
        } else {
            // Handle the case when the HTTP request was not successful
            $errorCode = $response->status();
            // Handle error appropriately, for example, return an error view
            return view('error');
        }

       
    }

    public function updateStatus($id){
        $status = 'Approved';
        $update = Http::post('http://192.168.191.85:8000/api/update-status',[
            'id' => $id,
            'status' => $status
        ]);

        if($update){
            Alert::success('Review has been Approved');
            return redirect()->back();
        }
    }
}
