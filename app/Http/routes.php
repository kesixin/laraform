<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'backend'],function (){

    Route::get('/login','Backend\AuthController@showLoginForm');


});
