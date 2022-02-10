<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'GuestController@home')->name('posts');

Route::get('/post/create', 'HomeController@createPost')->name('post.create');
Route::post('/post/Store', 'HomeController@storePost')->name('post.store');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
