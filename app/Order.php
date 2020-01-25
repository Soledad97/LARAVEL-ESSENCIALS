<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =
    ['shipping_cost','shipping_type','total','status_id','payment_id','cart_id'];

    public function user () {

        return $this->belongsTo('App\User');
    }


public function payment () {
return $this->belongsTo('App\Payment');
}

public function carts() {
return $this->belongsTo('App\Cart'); 
}

//como la relacion con status???


}
