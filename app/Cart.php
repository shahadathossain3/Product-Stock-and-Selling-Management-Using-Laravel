<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Cart extends Model
{
    public $fillable = [
        'ip_address',
        'product_id',
        'product_name',
        'product_quantity',
      ];
    
      public function user()
      {
        return $this->belongsTo(User::class);
      }
    
      public function customer()
      {
        return $this->belongsTo(Customer::class);
      }
    
      public function product()
      {
        return $this->belongsTo(Product::class);
      }


      public static function totalCarts()
      {
      
          $carts = Cart::where('ip_address', request()->ip())->get();
        
        return $carts;
      }
    
    /**
     * total Items in the cart
     * @return integer total item
     */
      public static function totalItems()
      {
    
          $carts = Cart::where('ip_address', request()->ip())->get();
        
    
        $total_item = 0;
    
        foreach ($carts as $cart) {
          $total_item += $cart->product_quantity;
        }
        return $total_item;
      }
    
}
