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

Route::get('/', 'Auth\LoginController@index')->name('login');

Route::get('/home', 'Auth\LoginController@index')->name('login2');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/users', 'UsersController@index');
    Route::get('/users/user/{id}', 'UsersController@showUser');
    Route::get('/compliments/received', 'ComplimentController@showReceived');
    Route::get('/compliments/given', 'ComplimentController@showGiven');

    Route::post('/compliments', 'ComplimentController@store');

});

Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/login/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/logout', 'Auth\LoginController@logout');
