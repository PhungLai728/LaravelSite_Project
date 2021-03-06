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

//Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@store')->name('contact.store');
Route::get('/thanks/{name}', 'HomeController@thanks')->name('thanks');
Route::get('/home', 'HomeController@home')->name('authhome');


Auth::routes();

Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register', 'HomeController@register')->name('register');
