<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class StripePaymentController extends Controller
{
    public function index()
    {
        return view('sproduct');
    }



    public function checkout(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $redirectUrl = route('stripe.checkout.success') . '?session_id={CHECKOUT_SESSION_ID}';
        $response = $stripe->checkout->sessions->create([

            'success_url' => $redirectUrl,
            'customer_email' => 'hariom@gmail.com',
            'payment_method_types' => ['link', 'card'],
            'line_items' => [
                [

                    'price_data' => [


                        'product_data' => [

                            'name' => $request->product,


                        ],




                        'unit_amount' => 100*50,
                        'currency' => 'inr',

                    ],

                    'quantity' => 1,


                ],

            ],

            'mode' => 'payment',
            'allow_promotion_codes' => true,

        ]);

        return redirect($response['url']);
    }


    public function checkoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $response = $stripe->checkout->sessions->retrieve($request->session_id);

        //$decoded_reference_data = json_decode($response->client_reference_id);


        //dd($decoded_reference_data);die;

       // dd($response->payment_intent);

    // Access the payment intent from the retrieved session object
    $payment_intent_id = $response->payment_intent;
    
    // Retrieve the payment intent to get the charge ID
    $payment_intent = $stripe->paymentIntents->retrieve($payment_intent_id);
    //dd($payment_intent);








    //$ab =$stripe->issuing->transactions->all(['limit' => 3]);

   // dd($ab);die;







    
  

        return redirect()->route('home')->with('success', 'Payment Successfully!');
    }
}
