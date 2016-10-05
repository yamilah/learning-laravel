<?php

Route::get('/', function () {
	$users = DB::table('users')->get();
	return $users;
});
