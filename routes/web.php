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

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return "ok";
});
Route::get('/home', 'HomeController@form' );
Route::get('/register', 'AuthController@regis');
Route::post('/welcome', 'AuthController@welcome');
/* php -S localhost:8000 -t public harus pake ini jgn php artisan serve */
Route::get('/blank',  function () {
    return view('tugas_laravel_2.blank');
});
Route::get('/',  function () {
    return view('tugas_laravel_2.index');
});
Route::get('/data-tables',  function () {
    return view('tugas_laravel_2.datatables');
});
