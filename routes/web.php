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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@store')->name('contact.store');
Route::get('/thanks/{name}', 'HomeController@thanks')->name('thanks');


//Route::post('/contact', function () {
//    $data = request()->all();
//    echo "Name: " .$data['name']. '<br>';
//    echo "Email: " . $data['email'] . '<br>';
//    echo "Message: " . $data['body'];
//});



