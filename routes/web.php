<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return "ok";
});
Route::get('/', 'HomeController@form' );
Route::get('/register', 'AuthController@regis');
Route::post('/welcome', 'AuthController@welcome');
