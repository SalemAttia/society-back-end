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
Route::post('/ask','studentController@store');
Route::post('/answer','studentController@postanswer');
Route::get('/profile/{id}','studentController@userprofile');
Route::get('/uploads','studentController@uploads');
Route::post('/follow','studentController@follow');
Route::patch('/update/{id}','studentController@update');

Route::get('/updatequestion/{id}','studentController@updatequestion');
Route::patch('/updatethisQuestion/{id}',[
	'uses' => 'studentController@updatethisQuestion',
	'as' => 'updatethisQuestion']);
Route::get('/download/{id}','studentController@download');


//doctor

Route::post('/uploadlecture','doctorcontroller@uploadlecture');
Route::get('/questiontoanswer','doctorcontroller@questions');
Route::get('/Materials','doctorcontroller@matrial');
Route::get('/deletematrial/{matrial}','doctorcontroller@deletematrial');

// admin
Route::get('/dashbord','admaincontroller@questions');


Route::auth();