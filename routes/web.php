<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home')->name('home');

// Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/emps/list', 'GuestController@apiGetEmps')->name('api.getEmps');

Route::get('/emp/delete/{id}', 'GuestController@apiDeleteEmp')->name('api.deleteEmp');
