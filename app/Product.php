<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','calification','stock','price','category_id'];

    public function category (){

        return $this->belongsTo('App\Category');

    }

    public function photos (){

        return $this->hasMany('App\productPhoto');

    }
}
