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

Route::get('/users/login', 'UserController@Login')->name('login');
Route::post('/users/login', 'UserController@postLogin')->name('users.post.login');
Route::get('/users/sigup', 'UserController@Create')->name('users.create');
Route::post('/users/sigup', 'UserController@Store')->name('users.store');
Route::get('/home', 'ProjectController@home')->name('home');
