<?php

Route::get('/', function () {
	$user = User::find(2);
	$user->username = 'UpdatedName';
	$user->save();

	return User::all();
});
