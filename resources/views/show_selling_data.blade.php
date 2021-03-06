@extends('layouts.app')


@section('content')
<div class='container'>


		<div class="text-right m-2">
      <a class="btn btn-primary" href="{{route('makepdf')}}" role="button">PDF File</a>
	    </div>

      <div>
        <h2>Selling Information</h2>
      </div>
	    

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Serial No</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Model</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Customer Mobile</th>
            <th scope="col">Customer Address</th>
            <th scope="col">Product Quantity</th>
            <th scope="col"> Per Product Price</th>
            <th scope="col"> Total Product Price</th>
            <th scope="col"> Selling Date</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($sells as $sell)
          <tr>
            <th scope="row">{{$sell->id}}</th>
            <td>{{$sell->product_name}}</td>
            <td>{{$sell->product_category}}</td>
            <td>{{$sell->product_model}}</td>
            <td>{{$sell->customer_name}}</td>
            <td>{{$sell->customer_mobile}}</td>
            <td>{{$sell->customer_address}}</td>
            <td>{{$sell->product_quantity}}</td>
            <td>{{$sell->per_product_price}}</td>
            <td>{{$sell->total_product_price}}</td>
            <td>{{$sell->selling_date}}</td>
        
            
          </tr>

          @endforeach
       
         
        </tbody>
      </table>


</div>
  @endsection