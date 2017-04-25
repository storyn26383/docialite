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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/facebook/login', 'Auth\Social\FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\Social\FacebookController@handleProviderCallback');
Route::get('auth/google/login', 'Auth\Social\GoogleController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\Social\GoogleController@handleProviderCallback');
