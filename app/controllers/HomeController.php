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

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showRollDice($guess)
	{
	    $data = [];
	    $data['guess'] = $guess;
	    $data['random'] = rand(1, 6);
	    return View::make('rolldice')->with($data);
	}
	public function showLogin()
	{
		return View::make('blog_login');
	}

	public function doLogin()

	{
		$email = Input::get('email');
		$password = Input::get('password'); 

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		
			Session::flash('errorMessage', 'Your are logged in');
    		return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', 'Unsucccessful log in attempt');
	        
    		return Redirect::back();
		}
	}

	public function doLogout()	{

		Auth::logout();
		return Redirect::intended('/posts');
	}

	public function showProjects()
	{
		return View::make('projects');
	}

}
