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


Route::get('/','HomepageController@index');
Route::get('/{shortlink}','HomepageController@link');
Route::get('/blog/detail/{artikel}','HomepageController@detail');

// route resource
Route::resource('/slink','SlinkController');

Auth::routes(['register'=> false, 'reset' => false]);

// login
Route::get('/cikara/login','Auth\LoginController@showLoginForm');
Route::post('/cikara/logout','Auth\LoginController@logout');
Route::post('/cikara/login','Auth\LoginController@login');
Route::get('/cikara/shortlink','HomeController@shortlink');
Route::post('/cikara/post/{data}','HomeController@post');

Route::get('/cikara/home', 'HomeController@index');
