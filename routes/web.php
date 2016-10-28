<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('foo', function () {
    return 'Hello World';
});
Route::get('/new_post', function(){
	return view('create_post');
});
Route::get('/view_user_posts', function(){
	$data = 'Postcontroller@view_user_posts';
	return view('view_user_posts', $data);
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/create_post', 'PostController@create');