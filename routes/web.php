<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('address/insert','AddressController@addressinsert');
Route::get('address/update/{id}','AddressController@addressupdate');
Route::get('address/read/{id}','AddressController@addressread');
Route::get('address/delete/{id}','AddressController@addressdelete');


Route::get('posts/create','PostController@create');
Route::get('posts/read/{id}','PostController@read');
Route::get('posts/update/{id}','PostController@update');
Route::get('posts/delete/{id}','PostController@delete');

Route::get('role/create','RoleController@create');
Route::get('role/read/{id}','RoleController@read');
Route::get('role/update','RoleController@update');

Route::get('dates','TestController@date');

Route::get('getname',function(){
    $user = \App\User::find(1);
    echo $user->name;
});


