<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::auth();
Route::get('/home', 'PageController@getHome');
//Route::get('/', 'HomeController@index');
Route::get('/', 'PageController@getHome');
Route::get('contact', 'PageController@getContact');
Route::get('about', 'PageController@getAbout');
Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');

Route::resource('post','PostController');



