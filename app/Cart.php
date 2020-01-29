<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable = ['qty', 'user_id'];

  public function user(){
    return $this->belongsTo(User::class, 'user_id');
  }
}
