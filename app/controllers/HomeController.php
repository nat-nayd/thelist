<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	/**
	 * Landing page
	 */
	public function getIndex()
	{
		return View::make('home.index', array('index' => 'true'));
	}

	/**
	 * Login form
	 */
	public function getLogin()
	{
		return View::make('home.login');
	}

	/**
	 * Logout
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	/**
	 * Handle Login
	 */
	public function postLogin()
	{
		$input = Input::all();
		$rules = array(
			'username' => 'required',
			'password' => 'required'
		);

		$v = Validator::make($input, $rules);

		if($v->fails()){
			return Redirect::to('login')->withErrors($v);
		} else {

			$credentials = array(
				'username' => $input['username'],
				'password' => $input['password']
			);

			if(Auth::attempt($credentials)) {
				return Redirect::to('admin');
			} else {
				return Redirect::to('login');
			}
		}
	}
}
