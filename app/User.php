<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address() {
        return $this->hasOne('App\Address');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    public function getNameAttribute($value) {
        return ucfirst($value);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = strtoupper($value);
    }
}
