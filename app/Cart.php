<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable = ['qty', 'user_id'];

  public function orders (){

      return $this->hasMany('App\Order');

      //public function users(){
      //return $this->belongsTo('App\User');
      //}
      //como hago la relacion con cart_product???
    }

}
