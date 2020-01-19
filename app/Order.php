<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =  ['shipping_cost','shipping_type','total','status_id','payment_id','cart','calification','stock','price','category_id'];

    public function category (){

        return $this->belongsTo('App\Order');

   }
}