<?php

namespace App\Http\Controllers\RestaurantReports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CompleteTransactionController extends Controller
{
    public function index(){
        //from Restaurant 3 payment and billing
        $transaction = Http::get('http://192.168.101.75:8000/api/complete-transaction');

        $data = $transaction->json();
        
        return view('restaurantReports.completeTransaction.index', compact(
            'data',
        ));
    }

    //STRIPE PAYMENT API INTEGRATION
    public function stripePayments(){
        $stripe_payment = Http::get('https://v1.nocodeapi.com/warrenryo/stripe/HHhckgXtPXqwOPxM/charges');

        $stripe_data = $stripe_payment->json();
        return view('restaurantReports.stripePayments.index', compact(
            'stripe_data'
        ));
    }
}
