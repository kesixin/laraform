<?php


Route::get('/', function () {
    return view('welcome');
});

//Authentication Routes...
Route::get('/login','Auth\AuthController@showLoginForm');
Route::post('/login','Auth\AuthController@login');
Route::get('/logout','Auth\AuthController@logout');

// Registration Routes...
Route::get('/register','Auth\AuthController@showRegistrationForm');
Route::post('/register','Auth\AuthController@register');

//Password Reset Routes...
Route::get('/password/reset', 'Auth\PasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\PasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\PasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::group(['prefix'=>'backend'],function (){



});

//Route::auth();

//Route::get('/home', 'HomeController@index');
