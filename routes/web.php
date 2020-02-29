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

Route::get('/blog', 'Controller@blog')->name('blog')->middleware(['auth','admin']);
Route::get('/blogs', 'Controller@index');
Route::get('/diensten', function() {
  return view('diensten');
});
Route::get('/', function() {
  return view('index');
})->name('homepage');
Route::get('/contact', function() {
  return view('contact');
})->name('contact');

// Route::get('/', function() {
//   return view('work-in-progress');
// });

Route::get('/users', 'Controller@userPage')->name('users')->middleware(['auth', 'admin']);
Route::post('/addblog', 'Controller@addBlog')->name('addBlog')->middleware(['auth','admin']);
Route::get('/removeblog/{id}', 'Controller@removeBlog')->name('removeBlog')->middleware(['auth','admin']);

Route::get('/blog/edit/{id}', 'Controller@indexEditBlog')->name('editBlogPage')->middleware(['auth', 'admin']);
Route::post('/editblog/{id}', 'Controller@editBlog')->name('editBlog')->middleware(['auth', 'admin']);

Route::get('/changeUserRole/{email}', 'Controller@changeUserRole')->name('changeUserRole')->middleware(['auth','admin']);

Route::post('/addimage/{blog}', 'Controller@addImage')->name('addImage')->middleware(['auth','admin']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
