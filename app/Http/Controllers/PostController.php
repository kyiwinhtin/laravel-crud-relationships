<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
    	$user = User::find(1);
    	$post = new Post(['text' => "my first post",'body' => 'laravel is awesome']);
    	$user->posts()->save($post);
    }

    public function read($id) {
    	$user = User::find($id);
    	foreach($user->posts as $post) {
    		echo $post->text."<br>";
    	}
    }

    public function update($id) {
    	$user = User::find($id);
    	$user->posts()->where("id",'=',2)->update(["text" => 'updated again id 1','body' => "updated again id 2"]);

    }

    public function delete($id) {
    	$user = User::find($id);
    	$user->posts()->delete();

    }


}
