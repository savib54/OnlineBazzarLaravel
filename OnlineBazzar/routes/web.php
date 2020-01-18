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


Route::get('/wpadmin', 'HomeController@admin')->name('admin');

Route::get('/', 'LoginController@retriveData');

Auth::routes();
// Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/createForm', function () {
    return view('layouts.createForm');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/car', 'HomeController@car')->name('car');
Route::get('/mobile', 'HomeController@mobile')->name('mobile');
Route::get('/bikes', 'HomeController@bikes')->name('bikes');
Route::get('/furniture', 'HomeController@furniture')->name('furniture');
Route::get('/house', 'HomeController@house')->name('house');
Route::get('/watch', 'HomeController@watch')->name('watch');


Route::get('/edit/{id}', 'HomeController@edit')->name('home');
Route::get('/delete/{id}', 'HomeController@delete')->name('home');

Route::get('/gallery', 'LoginController@getGallery')->name('gallery');
Route::post('/register/store', 'LoginController@storeRegisterForm');
Route::get('/search', 'searchcontroller@search');

