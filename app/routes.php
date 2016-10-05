<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('users', function() {
	$users = User::find(1);
	return $user->email;
});
