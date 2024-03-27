<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\R3Model\PaymentInformation;
use App\Models\R5Model\OnlineOrderingCart;

class APIController extends Controller
{
    public function paymentOrder(Request $request){
        $orders = new PaymentInformation;

        if($orders){
            $submit_order = $orders->create([
                'acc_id' => $request['acc_id'],
                'invoice_no' => $request['invoice_no'],
                'customer_name' => $request['customer_name'],
                'customer_email' => $request['customer_email'],
                'payment_method' => $request['payment_method'],
                'payment_status' => $request['payment_status'],
                'room_no' => $request[
                    'room_no'],
                'status' => $request['status'],
            ]);

            $cart = OnlineOrderingCart::where('acc_id', $request['acc_id'])->get();

            if($submit_order){
                foreach($cart as $carts){
                    
                    $submit_order->cartPayments()->create([
                        'payment_id' => $submit_order->id,
                        'account_id' => $request['acc_id'],
                        'item_name' =>  $carts->title,
                        'category' => $carts->category,
                        'status' => $request['status_cart'],
                        'quantity' => $carts->quantity,
                        'total_price' => $carts->price * $carts->quantity
                    ]);
                }
                
            }
            return response()->json([
                'message' => 'success'
            ]);
        }
    }
}
