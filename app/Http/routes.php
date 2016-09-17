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

//Route::get('/', 'HomeController@index');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/login', 'LoginController@login');

// Cellar 
Route::get('/cellar', 'CellarController@index'); //, ['middleware' => 'auth']);

// Logout
Route::get('auth/logout', 'Auth\AuthController@logout');

// Cellar 
Route::get('/search', 'SearchController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/update_profile', 'ProfileController@updateProfile');

Route::post('/cellarSearch', 'SearchController@cellar_Search');

//Route::post('/profile', ['uses' => 'ProfileController@show']);

Route::resource('profile', 'ProfileController');

Route::resource('cellar', 'CellarController');

Route::resource('search', 'SearchController');

//Route::DELETE('/cellar/{id}', 'CellarrController@destroy');

//Route::resource('register', 'RegisterController');
	
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
	//Route::auth();

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
	// Route::get('/profile', function () {
	// 	return view('profile');
	// })->middleware('auth');

	// Cellar
	//Route::GET('/cellar/{id}', 'CellarController@index', ['middleware' => 'auth']);
	// Route::get('/cellar/{id}', function () {
	//     return view('cellar');
	// });

	// Register
	// Route::post('/register', function () {
	//     return view('auth/register');
	// });
	//Route::post('/register', 'Auth\AuthController@create');
	//Route::post('auth/register', 'Auth\AuthController@create');
	//Route::post('auth/register', 'Auth\AuthController@postRegister');

	// // Log In
	 Route::get('/login', function () {
	    return view('auth/login');
	});

	 
	// route to show the login form
	//Route::get('login', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	//Route::post('login', array('uses' => 'HomeController@doLogin'));


	//Route::get('/home', 'HomeController@index');
});
