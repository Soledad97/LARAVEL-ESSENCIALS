<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','price','stock'];

    public function categories () {
        return $this->belongsToMany('App\Category', 'product_category', 'product_id', 'category_id');
    }
    public function photos(){
        return $this->belongsToMany('App\Photo', 'product_photo', 'product_id', 'photo_id');
    }
    public function carts(){
        return $this->belongsToMany('App\Cart','product_cart', 'product_id', 'cart_id');
      }
  }

    
