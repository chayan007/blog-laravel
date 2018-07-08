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

Route::get('/', 'PostsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/insert','PostsController@index');
    Route::post('/insert','PostsController@create');
    Route::get('/{uid}/{pid}','PostsController@details');
    Route::post('/{pid}', 'PostsController@postcomment');
    Route::get('/admin', 'AdminController@index');
    Route::post('/admin/delete/post/{id}', 'AdminController@deletepost');
    Route::post('/admin/edit/post/{id}', 'AdminController@editpost');
});


Route::get('/{username}', 'PostsController@showuser');
Route::get('/{username}/{slug}', function () {
    return view('welcome');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
