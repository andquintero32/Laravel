<?php

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
Route::resource('movie','MovieController');
Route::get('movie/destroy/{id}',['as'=>'movie/destroy','uses'=>'MovieController@destroy']);
Route::post('movie/search',['as'=>'movie/search','uses'=>'MovieController@search']);



Route::get('/', function () {
    return view('welcome');
});
