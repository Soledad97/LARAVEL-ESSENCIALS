<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'icon_id'];
    
    public function products () {
        return $this->belongsToMany('App\Product', 'product_category', 'product_id', 'category_id');
    }

    public function icon(){
        return $this->belongsTo('App\Photo', 'icon_id');
    }
}
