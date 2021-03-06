<html>

<body>
    
    <table  width="100%">
      <thead>
    
      <tr>
        <th>Serial No</th>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Product Model</th>
        <th>Customer Name</th>
        <th>Customer Mobile</th>
        <th>Customer Address</th>
        <th>Product Quantity</th>
        <th> Per Product Price</th>
        <th> Total Product Price</th>
        <th> Selling Date</th>
      </tr>
      </thead>
        @foreach ($sells as $sell)
      <tr>
        <td>{{$sell->id}}</td>
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
  </table>
  </body>
</html>