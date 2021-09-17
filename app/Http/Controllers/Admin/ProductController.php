<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.product.index')->withProducts(Product::orderBy('created_at','desc')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'price' => 'required',
            'image' => 'required|max:2048',
        ]);

        try {
            $product = new Product();
            $product->name = request()->name;
            $product->price = request()->price;
            $product->image = basename(request()->file('image')->store('public/product'));
            $product->description = request()->description;
            $product->save();
            
            return redirect()->route('products.index')->withSuccess('Product created successfully');
        } catch(\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function show($id)
    {
        return view('admin.product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit')->withProduct($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Product $product, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,id,'.$product->id,
            'price' => 'required',
        ]);

        try {
            $product->name = request()->name;
            $product->price = request()->price;
            $product->description = request()->description;
            if(request()->has('image')) {
                Storage::delete('/public/product/'.$product->image);
                $product->image = basename(request()->file('image')->store('public/product'));
            }
            $product->save();
            return redirect()->route('products.index')->withSuccess('Product updated successfully');
        } catch(\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            $product = Product::find($id);
            $product->delete();
            return [
                'status' => true, 
                'msg' => 'Product deleted successfully'
            ];
        } catch(\Exception $e) {
            return [
                'status' => false, 
                'msg' => $e->getMessage()
            ];
        }

    }
}
