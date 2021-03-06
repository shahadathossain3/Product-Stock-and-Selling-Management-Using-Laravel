<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(9);
        return view('show_all_product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */




    
    
    public function create()
    {
        return view('add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       

          
      
        
    $product = new Product();

    $product->product_name = $request->product_name;
    $product->product_category = $request->product_category;
    $product->product_model = $request->product_model;
    $product->total_product_price = $request->total_product_price;
    $product->per_product_price = $request->per_product_price;
    $product->total_product_quantity = $request->total_product_quantity;
    $product->product_entry_date=$request->product_entry_date;
    $product->save();

    return redirect()->route('add_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        if (!is_null($product)) {
          return view('show', compact('product'));
        }else {
          session()->flash('errors', 'Sorry !! There is no product by this URL..');
          return redirect()->route('products');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
