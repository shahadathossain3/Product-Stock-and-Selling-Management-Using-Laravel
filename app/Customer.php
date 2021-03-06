<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function cart()
  {
    return $this->hasMany(Cart::class);
  }

}
