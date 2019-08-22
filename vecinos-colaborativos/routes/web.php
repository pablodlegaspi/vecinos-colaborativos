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
})->middleware('auth');

Route::get('/profile', function(){
  return view('profile');
});

Route::get('create-post', 'PostsController@index')->middleware('auth');


Route::post('create-post', 'PostsController@index')->middleware('auth');

Route::get('/contacts', function(){
  return view('/contacts');
});
