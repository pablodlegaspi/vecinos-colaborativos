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

Route::get('/timeline', function(){
  return view('timeline');
})->middleware('auth');

// Route::get('/timeline', 'PostsController@timeline')->middleware('auth');


// Route::get('settings/{id}', 'UserController@settings')->middleware('auth');
Route::get('settings', function(){
  return view('/settings');
})->middleware('auth');

Route::put('settings', 'UserController@update')->name('updateUser')->middleware('auth');

Route::get('search', 'SearchController@search')->name('search')->middleware('auth');

Route::get('profile', 'PostsController@profile')->middleware('auth');

Route::get('create-post', 'PostsController@create')->middleware('auth');

Route::post('create-post', 'PostsController@store')->middleware('auth');

Route::get('/contacts', function(){
  return view('/contacts');
})->middleware('auth');

Route::get('edit-post/{id}', 'PostsController@edit')->middleware('auth');

Route::post('edit-post/{id}', 'PostsController@update')->middleware('auth');

Route::get('post/{id}', 'PostsController@show')->middleware('auth');

Route::delete('delete/post', 'PostsController@delete')->name('deletePost')->middleware('auth');
// Route::delete('delete/{id}', 'PostsController@delete')->middleware('auth');
// Route::delete('post/delete/{id}', 'PostsController@delete')->middleware('auth');

Route::get('otherProfile/{id}', 'UserController@oneProfile')->middleware('auth');

Route::post('follow', 'UserController@follow')->name('follow')->middleware('auth');
