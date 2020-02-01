<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['Country', 'City', 'State', 'Street'];



public function users(){
    return $this->belongsToMany('App\User', 'user_address','address_id', 'user_id' );
  }
}