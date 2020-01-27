<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['source', 'type'];

    public function categories() {
      return $this->hasMany('App\Category', 'category_id');
    }
}
