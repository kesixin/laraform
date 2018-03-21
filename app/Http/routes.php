<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','Auth\AuthController@showLoginForm');
Route::post('/login','Auth\AuthController@login');
Route::get('/logout','Auth\AuthController@logout');

Route::get('/register','Auth\AuthController@showRegistrationForm');
Route::post('/register','Auth\AuthController@register');

Route::group(['prefix'=>'backend'],function (){



});

//Route::auth();

//Route::get('/home', 'HomeController@index');
