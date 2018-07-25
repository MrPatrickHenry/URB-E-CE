<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class CheckoutController extends Controller
{

    public function charge(Request $request)
    {

    	        // dd($request->all());


Stripe::setApiKey(env('STRIPE_SECRET_KEY'));


        $customer = Customer::create(array(
            'email' => $request->stripeEmail,
            'description'  => '23'
        ));

        // $charge = Charge::create(array(
        //     'customer' => $customer->id,
        //     'amount'   => 1999,
        //     'description' => 'April Invoice',
        //     'currency' => 'usd',
        //     'source' => $request->stripeToken,
        //     'capture' => "true",
        //     'statement_descriptor' => "20-twenty"

        // ));

$charge = Charge::create(array(
    'customer' => $customer->id,
    'amount'   => 1999,
    'currency' => 'usd'
));



}

}

