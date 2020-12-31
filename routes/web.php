<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/blogs', 'Controller@index')->name('blogs');
Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'index')->name('homepage');
Route::view('/diensten', 'diensten')->name('diensten');

Route::prefix('/contact')->group(function() {
    Route::view('/', 'contact')->name('contact');
    Route::view('/contactform', 'contactform')->name('contactForm');
    Route::view('/registrationform', 'registrationForm')->name('registrationForm');
});

Route::prefix('/mail')->group(function() {
    Route::post('/contact', 'MailController@SendContactMail')->name('sendContactMail');
    Route::post('/registration', 'MailController@SendRegistrationMail')->name('sendRegistrationMail');
});

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/blog', 'Controller@viewBlogs')->name('blog');
    Route::view('/blog/add', 'addblog')->name('addBlogPage');
    Route::post('/blog/add', 'Controller@addBlog')->name('addBlog');
    
    Route::get('/users', 'Controller@userPage')->name('users');
    Route::patch('/users/{email}', 'Controller@changeUserRole')->name('changeUserRole');
    Route::get('/removeblog/{id}', 'Controller@removeBlog')->name('removeBlog');
    
    Route::get('/blog/edit/{id}', 'Controller@indexEditBlog')->name('editBlogPage');
    Route::post('/editblog/{id}', 'Controller@editBlog')->name('editBlog');
    Route::post('/editblogname/{id}', 'Controller@editBlogName')->name('editBlogName');
    
    Route::get('/removeimage/{id}', 'Controller@removeImage')->name('removeImage');
    Route::post('/addimage/{id}', 'Controller@addImage')->name('addImage');
});
