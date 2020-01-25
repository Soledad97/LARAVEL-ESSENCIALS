<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable = ['qty', 'user_id'];

  public function order (){
    return $this->hasMany('App\Order');
  }

  public function user(){
    return $this->belongsTo('App\User');  //preguntar
  }

  public function products(){
    return $this->belongsToMany('App\Product);
  }

}
