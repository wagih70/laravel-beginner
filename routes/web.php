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

Route::get('/', function () {
    return view('welcome');//welcome.blade.php
});
Route::get('about','testController@about');

Route::resource('songs','HomeController');

Route::resource('todo','todocontroller');

Route::get('/wagih',function(){
     return view('wagih');
});

Route::get('pag','paginationController@users');

Route::get('form','formController@index')->name('form');

Route::post('form','formController@store');




