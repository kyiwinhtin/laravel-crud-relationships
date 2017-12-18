<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $fillable = ['name','user_id'];
    public function test(){
        $role = Role::find(2);
    }
}
