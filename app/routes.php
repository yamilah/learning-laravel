<?php

Route::get('/', function () {
	$users = DB::table('users')->where('username', '!=', 'yamilah')->get();
	return $users;
});
