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

Route::get('/', 'PostsController@index');

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController', ['only' => ['show', 'edit', 'update']]);

Route::get('pass', 'PasswordsController@edit');
Route::post('pass', 'PasswordsController@update')->name('pass');


Route::get('/users/{user}/stocks', 'StocksController@index');

Route::group(['prefix'=>'posts/{post}'],function(){
  Route::post('stock','StocksController@store')->name('stocks.stock');
  Route::delete('unstock','StocksController@destroy')->name('stocks.unstock');
});

Route::post('/posts/{post}/comments','CommentsController@store');
Route::delete('/posts/{post}/{comment}','CommentsController@destroy');




