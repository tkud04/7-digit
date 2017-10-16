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

Route::get('/', 'MainController@index');
Route::get('zohoverify/verifyforzoho.html', 'WelcomeController@getZoho');

Route::get('home', 'HomeController@index');
Route::post('apply', 'MainController@postApply');
Route::post('contact', 'MainController@postContact');
Route::get('uploads', 'MainController@getUploads');
Route::get('add-news', 'MainController@getAddNews');
Route::post('add-news', 'MainController@postAddNews');
Route::get('blog/{title?}', 'MainController@getBlog');
Route::post('add-comment', 'MainController@postComment');
Route::get('about', 'MainController@getAbout');
