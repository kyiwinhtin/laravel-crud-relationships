<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function addressinsert() {
    	$user = User::findOrFail(1);
    	$add = new Address(['name' => 'Address 1234']);
    	// dd($add);
    	$user->address()->save($add);
    }

    public function addressupdate($id){

		$address = Address::whereUserId($id)->first();
		$address->name = "testing update or not";
		$address->save();

    }

    public function addressread($id) {
    	$user = User::find($id);
    	// echo $user->address->name;
    	echo $user->address->name;
    }

    public function addressdelete($id) {
    	$user = User::find($id);
    	$user->address()->delete();
    	return "done";

    }
}
