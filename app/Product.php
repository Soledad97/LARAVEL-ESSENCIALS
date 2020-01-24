<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','calification','stock','price','category_id','image'];

    public function categories (){

        return $this->belongsTo('App\Category');

    }


    public function cart_product(){

        return $this->belongsToMany('App\Product');

    }
    public function product_user(){

      return $this->belongsToMany('App\User');
    
 }
}