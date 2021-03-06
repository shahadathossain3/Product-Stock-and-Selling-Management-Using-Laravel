@extends('layouts.app')


@section('content')
<div class='container'>
<div class="row">
    <div class="col-md-4">

      @include('left_sidebar')

    </div>

    <div class="col-md-8">
      <div class="widget">
        <h3> All Products</h3>
        <div class="row">

            @foreach ($products as $product)
          
              <div class="col-md-4">
                <div class="card">
                 
          
          
                  <div class="card-body" style="width: 18rem;">
                    <h4 class="card-title">
                      <a href="{!! route('products.show', $product->id) !!}">{{ $product->product_name }}</a>
                    </h4>
                
                    <p class="card-text">Model - {{$product->product_model}}</p>
                    <p class="card-text">Category - {{$product->product_category}}</p>
                    <p class="card-text">Taka - {{ $product->total_product_price }}</p>
                    <p class="card-text">Items Stock - {{ $product->total_product_quantity }}</p>
                    @include('add_card')
                  </div>
                </div>
              </div>
          
            @endforeach
          
          </div>
      </div>
    </div>
</div>
  </div>
@endsection