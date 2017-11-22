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

Route::get('/', 'IndexController@index');
Route::get('/play', function () {
    return view('play');
});
Route::get('/suggest', function () {
    return view('suggest');
});
Route::get('/about', function () {
    return view('about');
});

Route::post('/game', 'DataController@show');