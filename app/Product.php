<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','calification','stock','price','category_id'];

    public function category (){

        return $this->belongsTo('App\Category');

    }

    public function cart_product(){

        return $this->belongsToMany('App\products');

    }
    public function product_user(){

      return $this->belongsToMany('App\User');
    }
}
