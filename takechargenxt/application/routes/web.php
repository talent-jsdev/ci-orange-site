<?php

Route::group('/user', ['namespace' => 'user'], function() {
	Route::get('/login', 'AuthController@login')->name('user.auth.login');
	Route::get('/logout', 'AuthController@logout')->name('user.auth.logout');

	Route::get('/signup', 'AuthController@signup');
	Route::post('/signup_post', 'AuthController@signup_post');
	Route::get('/signup2', 'AuthController@signup2');
	Route::post('/signup2_post', 'AuthController@signup2_post');
	Route::get('/signup3', 'AuthController@signup3');
	Route::post('/signup3_post', 'AuthController@signup3_post');
	Route::get('/signup4', 'AuthController@signup4');
	Route::get('/signup5', 'AuthController@signup5');
	Route::post('/signup5_post', 'AuthController@signup5_post');
	
	Route::get('/forgetpassword', 'AuthController@forgetpassword');

	Route::get('/forgotpass', 'AuthController@forgotpass')->name('user.auth.forgotpass');
});

Route::group('/user/dashboard', ['namespace' => 'user'], function() {

});

Route::get('/', 'Welcome@index');
Route::get('/home', 'Home@index');


Route::get('/video', 'Welcome@video');
Route::set('404_override', function(){
    show_404();
});

Route::set('translate_uri_dashes',FALSE);


