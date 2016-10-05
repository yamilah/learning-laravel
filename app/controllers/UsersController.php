<?php

class UsersController extends BaseController {

	protected $user;

	public function __construct(User $user) {
		$this->user = $user;
	}

	public function index() {
		$users = $this->user->all();
		return View::make('users.index', ['users' => $users]);
	}

	public function show($username) {
		$user = $this->user->whereUsername($username)->first();
		return View::make('users.show', ['user' => $user]);
	}

	public function create() {
		return View::make('users.create');
	}

	public function store() {

		$validator = Validator::make(Input::all(), User::$rules);

		if (!$validator->passes()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$this->user->email = Input::get('email');
		$this->user->username = Input::get('username');
		$this->user->password = Hash::make(Input::get('password'));
		$this->user->save();

		return Redirect::route('users.index');
	}
}
