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

Route::get('/blog', 'Controller@blog');
Route::get('/blogs', 'Controller@index');
Route::get('/', function() {
  return view('index');
});
Route::post('/addblog', 'Controller@addBlog')->name('addBlog');
Route::get('/removeBlog/{id}', 'Controller@removeBlog')->name('removeBlog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
