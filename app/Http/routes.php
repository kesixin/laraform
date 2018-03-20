<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','Auth\AuthController@showLoginForm');

Route::get('/register','Auth\AuthController@showRegistrationForm');

Route::group(['prefix'=>'backend'],function (){



});

//Route::auth();

//Route::get('/home', 'HomeController@index');
