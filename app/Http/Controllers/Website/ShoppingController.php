<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;
use Session;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        /*Cart::destroy();*/
        if(Cart::count() == 0) {
            Session::flash('info', 'Your cart is empty.');
        }
        return view('website.cart.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $product = Product::find(request()->product_id);
        $cartItem = Cart::add([
            'id' => request()->product_id,
            'name' => $product->name,
            'qty' => request()->qty,
            'price' => $product->price,
            'weight' => 0
        ]);
        /*dd($cartItem);*/

        Cart::associate($cartItem->rowId, 'App\Models\Product');
        
        Session::flash('success', 'Product added to cart.');
        return redirect()->route('website.cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
//        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return redirect()->back();
    }

    public function cart_increment($id, $qty)
    {
        Cart::update($id, $qty + 1);

        Session::flash('info', 'Product quantity increased.');
        return redirect()->back();

    }

    public function cart_decrement($id, $qty) {
        Cart::update($id, $qty - 1);

        Session::flash('info', 'Product quantity decreased.');
        return redirect()->back();
    }
}
