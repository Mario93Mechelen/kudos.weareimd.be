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
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home/index');
});

Route::get('/users', 'UsersController@index');


Route::get('/compliments/received', 'ComplimentController@showReceived');

Route::get('/compliments/given', 'ComplimentController@showGiven');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
