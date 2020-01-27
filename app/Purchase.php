<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable =
    ['cart_id','total','address_id','status_id','payment_id'];

    public function cart() {
        return $this->hasMany('App\Cart', 'cart_id');
    }
    public function address() {
        return $this->hasMany('App\Address', 'address_id');
    }
    public function payment() {
        return $this->hasMany('App\Payment', 'payment_id');
    }
  }
