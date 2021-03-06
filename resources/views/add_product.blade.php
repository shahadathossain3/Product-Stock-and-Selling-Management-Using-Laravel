@extends('layouts.app')


@section('content')

<div class='container'>
    <div class="row">

        <div class="col-md-4">
            @include('left_sidebar');
        </div>
      <div class="col-md-8">

    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Product
        </div>
        <div class="card-body">
          <form action="{{route('add_product.submit')}}" method="post">
            @csrf
    
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" name="product_name" id="product_name"  placeholder="Enter Product Name">
            </div>

            <div class="form-group">
                <label for="product_category">Product Categoty</label>
                <input type="text" class="form-control" name="product_category" id="product_category"  placeholder="Enter Product Category">
              </div>

              <div class="form-group">
                <label for="product_model">Product Model</label>
                <input type="text" class="form-control" name="product_model" id="product_model"  placeholder="Enter Product Model">
              </div>
           
            <div class="form-group">
              <label for="total_product_price">Total Product Price</label>
              <input type="number" class="form-control" name="total_product_price" id="total_product_price">
            </div>
            <div class="form-group">
                <label for="per_product_price">Per Product Price</label>
                <input type="number" class="form-control" name="per_product_price" id="per_product_price">
              </div>
            <div class="form-group">
              <label for="total_product_quantity">Total Product Quantity</label>
              <input type="number" class="form-control" name="total_product_quantity" id="total_product_quantity">
            </div>
              <div class="form-group">
                <label for="product_entry_date">Product Entry Date</label>
                
                  <input class="form-control" type="date" name="product_entry_date" id="product_entry_date">
            
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
          </form>
        </div>
      </div>

    </div>
</div>
</div>
</div>
    
@endsection