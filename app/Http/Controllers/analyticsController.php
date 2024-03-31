<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventoryModel;
use Illuminate\Support\Facades\Http;

class analyticsController extends Controller
{
    public function anaalytics()
    {
        $inventory = inventoryModel::all();

        //from Restaurant 3 payment and billing
        $transaction = Http::get('http://192.168.101.75:8000/api/complete-transaction');

        $recent_transaction = $transaction->json();

        $collection = collect($recent_transaction);
        $limitedData = $collection->take(5);
        $count_completed_transaction = count($recent_transaction);

        //HOTEL REVIEWS
        //from HOTEL 1
        //$hotel_reviews = Http::get('http://192.168.191.85:8000/api/room-reviews');
        // $reviews = $hotel_reviews->json();
        // $count_reviews = count($reviews);


        //STRIPE PAID COUNT
        $stripe_payment = Http::get('https://v1.nocodeapi.com/warrenryo/stripe/HHhckgXtPXqwOPxM/charges');

        $stripe_data = $stripe_payment->json();

        $countPaid = 0;

        foreach ($stripe_data['data'] as $charge) {
            if ($charge['paid'] === true) {
                $countPaid++;
            }
        }

        //INVENTORY STOCKS TOTAL
        $total_inventory = inventoryModel::count();



        //TOTAL INCOME 

        //from Restaurant 3 Payment 
        $total_income = Http::get('http://192.168.101.75:8000/api/income-chart');

        $income = $total_income->json();

        $january = $income['revenues']['January'];
        $february = $income['revenues']['February'];
        $march = $income['revenues']['March'];
        $april = $income['revenues']['April'];
        $may = $income['revenues']['May'];
        $june = $income['revenues']['June'];
        $july = $income['revenues']['July'];
        $august = $income['revenues']['August'];
        $september = $income['revenues']['September'];
        $october = $income['revenues']['October'];
        $november = $income['revenues']['November'];
        $december = $income['revenues']['December'];

        $total_profit = $income['total_profit'];


        return view("feedback.analytics", compact(
            'inventory',
            'count_completed_transaction',
            // 'count_reviews',
            'countPaid',
            'total_inventory',
            'january',
            'february',
            'march',
            'april',
            'may',
            'june',
            'july',
            'august',
            'september',
            'october',
            'november',
            'december',
            'total_profit',
            'limitedData'
        ));
    }
}
