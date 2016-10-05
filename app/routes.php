<?php

Route::get('/', function () {
	return User::orderBy('username', 'asc')->take(2)->get();
});
