<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role','name', 'email', 'password', 'avatar_id'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['email_verified_at' => 'datetime',
    ];

    public function roles (){
      //return $this->belongsTo('App\Cart');
      return $this->belongTo(Role::class, 'role_id');
    }

    public function products(){
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }

    public function avatar (){
      return $this->hasMany('App\Photo', 'avatar_id');
    }

    public function address(){
      return $this->belongsToMany('App\Address', 'user_address', 'user_id', 'address_id');
    }

    public function carts() 
    {
      return $this->hasMany(Cart::class);
    }
}
