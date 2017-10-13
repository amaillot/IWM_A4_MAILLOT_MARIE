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
    
    $firstname ="Luc";
    $lastname ="Marie";
    return view('welcome', compact('firstname'));// envoie de variable a ma vue
});


//Route::get('/tasks','TaskController@index');
//Route::get('/tasks/{id}','TaskController@show');
Route::resource('/tasks','TaskController');

Route::get('/items/select', 'ItemController@add');

Route::resource('/items', 'ItemController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/items/{filtre}', 'ItemController@filter')->name('filtre');