<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable = ['user_id'];

  public function user(){
    return $this->belongsTo(User::class, 'user_id');
  }

  public function products(){
    return $this->belongsToMany('App\Product','product_cart', 'product_id', 'cart_id')->withPivot('quantity');
  }

}
