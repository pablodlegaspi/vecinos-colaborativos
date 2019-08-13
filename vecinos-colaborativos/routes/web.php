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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function() {
  return view('home');
});

Route::get('/faq', function(){
  return view('faq');
});

Route::get('/tyc', function(){
  return view('tyc');
});

Auth::routes();

//Route::get('/register', 'RegisterController@form');
//Route::post('/register', 'RegisterController@register');

Route::get('/timeline', function(){
  return view('timeline');
});

Route::get('/profile', function(){
  return view('profile');
});
