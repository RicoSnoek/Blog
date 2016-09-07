<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('/waarbenik', 'PagesController@waarbenik');
Route::get('/overzicht', 'PostsController@overzicht');

Route::get('/overzicht/{posts}', 'PostsController@show');

Route::get('tags/{tags}', 'TagsController@show');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/admin', 'PostsController@create');
    Route::post('/admin', 'PostsController@store');
    
    Route::get('/overzicht/{posts}/edit', 'PostsController@edit');
    Route::patch('/overzicht/{posts}/edit', 'PostsController@update');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    //Route::get('/home', 'PagesController@home');
});
