<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','calification','stock','price','category_id','image'];

    public function categories (){
        return $this->belongsTo('App\Category');
    }

    public function cart(){
      return $this->belongsToMany('App\Cart');
    }
    public function user(){
        return $this->belongsToMany('App\User');
    }
    public function product_user(){

      return $this->belongsToMany('App\User');

 }
}
