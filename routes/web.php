<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PagesController@home');
Route::get('/profile','studentController@profile');
Route::get('/groups','studentController@groups');
Route::get('/group/{id}','studentController@group');
Route::get('/friends','studentController@friends');
Route::get('/masseges','studentController@masseges');
Route::get('/notification','studentController@notification');
Route::get('/questions','studentController@questions');
Route::get('/setting','studentController@setting');
Route::get('/question/{id}','studentController@singleQuestion');
Route::get('/profile/{id}','studentController@userprofile');
Route::auth();