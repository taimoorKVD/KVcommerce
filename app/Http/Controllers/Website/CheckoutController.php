<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\PurchaseSuccessful;
use Illuminate\Http\Request;

use Cart;
use Session;

use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index() {
        return view('website.checkout.checkout');
    }

    public function store()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $email = request()->stripeEmail;
        $charge = \Stripe\Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'Bill of '.config('app.name'),
            'source' => request()->stripeToken
        ]);
        
        Session::flash('success', 'Purchase successful. Please wait for our email.');
        Mail::to($email)->send(new PurchaseSuccessful(Cart::content(), $email));

        Cart::destroy();
        return redirect()->route('website.home.index');
    }
}
