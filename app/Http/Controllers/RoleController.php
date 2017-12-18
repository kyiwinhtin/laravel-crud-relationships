<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create() {
    	$user = User::find(1);
    	$role = new Role(['name' => 'Administrator']);
    	$user->roles()->save($role);
    }

    public function read($id) {
    	$user = User::find($id);
    	foreach($user->roles as $role) {
    		echo $role->name."<br>";
    	}
    }

    public function update() {
    	$user = User::find(1);
    	if($user->has('roles')) {
    		foreach($user->roles as $role) {
    			if($role->name == "Administrator") {
    				$role->name = "subscriber";
    				$role->save();
    			}
    		}
    	}
    }
    public function delete() {
    	$user = User::find($id);
    	foreach($user->roles as $role) {
    		$role->whereId(5)->delete();
    	}
    }
}
