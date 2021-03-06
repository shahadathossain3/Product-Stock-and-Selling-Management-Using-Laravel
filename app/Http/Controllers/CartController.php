<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use Auth;
use DB;

class CartController extends Controller
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
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
      'product_id' => 'required'
    ],
    [
      'product_id.required' => 'Please give a product'
    ]);

    
      $cart = Cart::where('ip_address', request()->ip())
      ->where('product_id', $request->product_id)->where('product_name',$request->product_name)
      ->first();

      $changeProductQuantity = Product::where('id', $request->product_id)
      ->first();

      
  

    if ((!is_null($cart)) and (!is_null($changeProductQuantity))) {
      $cart->increment('product_quantity');
      $changeProductQuantity->decrement('total_product_quantity');
    }else {
      $cart = new Cart();
      $cart->ip_address = request()->ip();
      $cart->product_id = $request->product_id;
      $cart->product_name = $request->product_name;
      $cart->save();
      $changeProductQuantity->save(); 
    }
   // session()->flash('success', 'Product has added to cart !!');
    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
  {
    $cart = Cart::find($id);
    if (!is_null($cart)) {
      $cart->product_quantity = $request->product_quantity;
      $cart->save();
    }else {
      return redirect()->route('carts');
    }
    session()->flash('success', 'Cart item has updated successfully !!');
    return back();
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
    if (!is_null($cart)) {
      $cart->delete();
    }else {
      return redirect()->route('carts');
    }
    session()->flash('success', 'Cart item has deleted !!');
    return back();
    }
}
