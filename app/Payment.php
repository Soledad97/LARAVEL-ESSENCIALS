<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $fillable = ['method'];

  public function orders(){
    return $this->belongsTo('App\Order');
  }
}
