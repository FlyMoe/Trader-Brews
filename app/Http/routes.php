<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::resource('cellar', 'CellarController');

Route::GET('/cellar', 'CellarController@index', ['middleware' => 'auth']);
	
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::Group(['middleware' => ['web']], function () {
	Route::auth();

	// Authentication Routes
	// Route::get('auth/login', 'Auth\AuthController@getLogin');
	// Route::get('auth/login', 'Auth\AuthController@postLogin');
	// Route::get('auth/logout', 'Auth\AuthController@getLogout');

	// // Registration Routes
	// Route::get('auth/register', 'Auth\AuthController@getRegister');
	// Route::get('auth/register', 'Auth\AuthController@postRegister');
	

	// Home Page, login not required
	Route::get('/', function () {
	    return view('index');
	});

	// About Me, login required
	Route::get('/about_me', function () {
	    return view('about_me');
	})->middleware('auth');

	// Profile, login required
	Route::get('/profile', function () {
		return view('profile');
	})->middleware('auth');

	// Cellar
	//Route::GET('/cellar/{id}', 'CellarController@index', ['middleware' => 'auth']);
	// Route::get('/cellar/{id}', function () {
	//     return view('cellar');
	// });

	// Register
	Route::get('/register', function () {
	    return view('auth/register');
	});

	// // Log In
	 Route::get('/login', function () {
	    return view('auth/login');
	});


	// route to show the login form
	//Route::get('login', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	//Route::post('login', array('uses' => 'HomeController@doLogin'));


	Route::get('/home', 'HomeController@index');
});
