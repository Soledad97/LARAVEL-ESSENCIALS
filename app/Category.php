<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'photo_id'];
    
    public function products() {
        return $this->belongsToMany('App\Product', 'product_category', 'category_id','product_id');
    }

    public function photo(){
        return $this->belongsTo('App\Photo', 'photo_id');
    }
}
