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

Route::get('/add-post', 'PostController@addPost');
Route::post('/add-post', 'PostController@createPost')->name('add.post');
Route::get('/post', 'PostController@showPost');
Route::get('/delete-post/{id}', 'PostController@deletePost');
Route::get('/update-post', 'PostController@updatePost')->name('post.update');
Route::get('/edit-post/{id}', 'PostController@updatedPost');    