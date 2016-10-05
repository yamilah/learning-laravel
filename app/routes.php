<?php

Route::resource('users', 'UsersController');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');
// Route::get('admin', function() {
// 	return 'Admin Page';
// });
// 
// Route::get('/', function() {
// 	User::create([
// 		'username' => 'alsome',
// 		'email' => 'alsome@me.com',
// 		'password' => Hash::make('me'),
// 	]);
//
// 	return 'Done!';
// });
