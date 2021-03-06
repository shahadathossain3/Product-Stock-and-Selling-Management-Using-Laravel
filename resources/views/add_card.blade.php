<form class="form-inline" action="{{ route('cart.store') }}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="hidden" name="product_name" value="{{ $product->product_name }}">
    <button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> Add to cart</button>
  </form>
  