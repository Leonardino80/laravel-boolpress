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

// Route::get('/', function () {
//     return view('welcome');
// });

// routing lato back office al controller lato user(senza login)
Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');

Auth::routes();

// routing lato utente loggato al controller lato admin anche se HomeController@index sembra uguale
// gruppo di metodi in comune a tutte le rotte: tutte iniziano con admin. prefix fa prefisso al URL
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin')->group(function(){
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('/posts', 'PostController');
});
