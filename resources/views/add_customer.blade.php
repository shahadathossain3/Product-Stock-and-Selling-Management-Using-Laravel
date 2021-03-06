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
          Add New Customer
        </div>
        <div class="card-body">
          <form action="#" method="post">
            @csrf
    
            <div class="form-group">
              <label for="product_name">Customer Name</label>
              <input type="text" class="form-control" name="customer_name" id="customer_name"  placeholder="Enter Customer Name">
            </div>

            <div class="form-group">
                <label for="customer_mobile">Customer Mobile</label>
                <input type="tel" class="form-control" name="customer_mobile" id="customer_mobile"  placeholder="Enter Customer Mobile">
              </div>

              <div class="form-group">
                <label for="customer_address">Customer Address</label>

                <textarea class="form-control" id="customer_address" rows="3"></textarea>
              </div>
           
            
            
              <div class="form-group">
                <label for="customer_entry_date">Customer Entry Date</label>
                
                  <input class="form-control" type="date" value="2021-01-01" name="customer_entry_date" id="customer_entry_date">
            
              </div>

              <div class="form-group">
                <label for="product_delivery_date">Product Delivery Date</label>
                
                  <input class="form-control" type="date" value="2021-01-01" name="product_delivery_date" id="product_delivery_date">
            
              </div>

            </div>

            <button type="submit" class="btn btn-primary">Add New Customery</button>
          </form>
        </div>
      </div>

    </div>
</div>
</div>
</div>
    
@endsection