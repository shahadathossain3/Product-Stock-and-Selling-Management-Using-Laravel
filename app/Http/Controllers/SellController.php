<?php

namespace App\Http\Controllers;

use App\Sell;
use App\Cart;
use App\Product;
use PDF;
use Illuminate\Http\Request;

class SellController extends Controller
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
        $sells=Sell::all();


        return view ('show_selling_data',compact('sells'));
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

    $sell=new Sell();

    $sell->product_name = $request->product_name;
    $sell->product_category = $request->product_category;
    $sell->product_model = $request->product_model;
    $sell->customer_name=$request->customer_name;
    $sell->customer_mobile=$request->customer_mobile;
    $sell->customer_address=$request->customer_address;
    $sell->total_product_price = $request->total_product_price;
    $sell->per_product_price = $request->per_product_price;
    $sell->product_quantity = $request->product_quantity;
    $sell->selling_date=$request->selling_date;
    $sell->save();


    //session()->flash('success', 'Your order has taken successfully !!! Please wait admin will soon confirm it.');

    return redirect()->route('add_product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function show(Sell $sell)
    {
        //
    }


    public function makepdf(Request $request)
    {
        
      


        $sells = Sell::all();
        $pdf = PDF::loadView('makepdf',compact('sells'))->setPaper('a4', 'landscape');
        return $pdf->download('Selling_Data.pdf');
    }



    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell $sell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell $sell)
    {
        //
    }
}
