@extends('layouts.app')
@section('content')

<div class='container'>



<div class='container margin-top-20 mb-3'>
    <div class="card card-body">
    
      <h2>Confirm Items</h2>
      <hr>
      <div class="row">
        <div class="col-md-7 border-right">
          @foreach (App\Cart::totalCarts() as $cart)
        
            <p>
              <strong>
             Product Name: {{ $cart->product->product_name }} - 
             Product Category: {{$cart->product->product_category}} - 
             Product Model : {{$cart->product->product_model}} - 
              {{ $cart->product->per_product_price }} taka 
              - {{ $cart->product_quantity }} Items
            </strong>
            </p>
          @endforeach
        </div>
        <div class="col-md-5">
          @php
          $total_price = 0;
          @endphp
          @foreach (App\Cart::totalCarts() as $cart)
            @php
            $total_price += $cart->product->per_product_price * $cart->product_quantity;
            @endphp
          @endforeach
          <p> <strong> Total Price :{{ $total_price }} Taka </strong></p>
        </div>
      </div>
      <p>
        <a href="{{ route('cart') }}">Change Cart items</a>
      </p>
    </div>
    


    <div class="card card-body mt-2 mb-4">
      <h2>Customer Information</h2>

      <form method="POST" action="{{route('sell.submit')}}">
        @csrf

        <div class="form-group row">
          <label for="product_name" class="col-md-4 col-form-label text-md-right">Product Name</label>

          <div class="col-md-6">
            <input id="product_name" type="text" class="form-control" name="product_name">
          </div>
        </div>
        <div class="form-group row">
          <label for="product_category" class="col-md-4 col-form-label text-md-right">Product Category</label>

          <div class="col-md-6">
            <input id="product_category" type="text" class="form-control" name="product_category">
          </div>
        </div>
        <div class="form-group row">
          <label for="product_model" class="col-md-4 col-form-label text-md-right">Product Model</label>

          <div class="col-md-6">
            <input id="product_model" type="text" class="form-control" name="product_model">
            
          </div>
        </div>
        <div class="form-group row">
          <label for="customer_name" class="col-md-4 col-form-label text-md-right">Customer Name</label>

          <div class="col-md-6">
            <input id="customer_name" type="text" class="form-control" name="customer_name">
          </div>
        </div>
        <div class="form-group row">
          <label for="customer_mobile" class="col-md-4 col-form-label text-md-right">Customer Mobile</label>

          <div class="col-md-6">
            <input id="customer_mobile" type="text" class="form-control" name="customer_mobile">
          </div>
        </div>
        <div class="form-group row">
                <label for="customer_address" class="col-md-4 col-form-label text-md-right">Customer Address</label>
                <div class="col-md-6">
                <textarea class="form-control" id="customer_address" name="customer_address" rows="3"></textarea>
              </div>
        </div>
        <div class="form-group row">
          <label for="product_quantity" class="col-md-4 col-form-label text-md-right">Product Quantity</label>

          <div class="col-md-6">
            <textarea class="form-control" id="product_quantity" name="product_quantity" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="per_product_price" class="col-md-4 col-form-label text-md-right">Per Product Price</label>

          <div class="col-md-6">
            <textarea class="form-control" id="per_product_price" name="per_product_price" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="total_product_price" class="col-md-4 col-form-label text-md-right">Total Product Price</label>

          <div class="col-md-6">
            <input id="total_product_price" type="number" class="form-control" name="total_product_price">
          </div>
        </div>

        <div class="form-group row">
          <label for="selling_date" class="col-md-4 col-form-label text-md-right">Selling Date</label>
          <div class="col-md-6">
            <input class="form-control" type="date" name="selling_date" id="selling_date">
      
        </div>
      </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              Confiram Now
            </button>
          </div>
        </div>

      


    </form>

  </div>


  </div>

</div>
</div>

@endsection