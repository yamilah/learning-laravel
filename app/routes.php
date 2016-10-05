<?php

Route::get('/', function () {
	User::create([
		'username' => 'AnotherUser',
		'password' => Hash::make('password'),
	]);

	return User::all();
});
