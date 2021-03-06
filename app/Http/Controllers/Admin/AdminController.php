<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use View;
use Theme;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index() {

		View::share('active','dashboard');
		Theme::setLayout('admin.app');
		View::share('title', 'dashboard');
		return Theme::view('admin/index');
	}

}
