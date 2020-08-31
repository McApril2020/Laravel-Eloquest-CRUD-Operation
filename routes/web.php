<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', 'PostController@index');

Route::post('/index', 'PostController@create')->name('add.post');

Route::get('/post', 'PostController@store');

Route::get('/delete-post/{id}', 'PostController@delete');

Route::post('/update-post', 'PostController@update')->name('post.update');

Route::get('/edit-post/{id}', 'PostController@edit');    