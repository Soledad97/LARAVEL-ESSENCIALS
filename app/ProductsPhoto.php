<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsPhoto extends Model
{
    protected $fillable = ['filename','product_id'];

    public function product(){

        return $this->belongsTo('App\product');

    }

}