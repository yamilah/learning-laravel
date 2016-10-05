<?php

class UsersController extends BaseController {
	public function index() {
			$users = User::all();
			return View::make('users/index', ['users' => $users]);
	}

	public function show($username) {
		$user = User::whereUsername($username)->first();
		return View::make('users/show', ['user' => $user]);
	}

	public function create() {
		return View::make('users/create');
	}

	public function store() {
		return 'create the new user, given the post data';
	}
}
