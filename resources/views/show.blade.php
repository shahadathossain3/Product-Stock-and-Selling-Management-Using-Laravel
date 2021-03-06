@extends('layouts.app')


@section('product_name')
  {{ $product->product_name }} | Laravel Ecommerce Site
@endsection


@section('content')
<div class='container'>

<!-- Start Sidebar + Content -->
<div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="mt-3">
          <p>Category <span class="badge badge-info">{{ $product->product_category }}</span></p>
          <p>Model <span class="badge badge-info">{{ $product->product_model }}</span></p>
        </div>

      </div>

      <div class="col-md-8">
        <div class="widget">
          <h3> {{ $product->product_name }}</h3>
          <h3> {{ $product->product_price }} Taka
            <span class="badge badge-primary">
              {{ $product->total_product_quantity  < 1 ? 'No Item is Available' : $product->total_product_quantity.' item in stock' }}
            </span>
          </h3>
          <hr>

          
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

</div>

@endsection