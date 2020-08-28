<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api/books', 'BookController@getBooks')->name('book.getbook');
Route::get('/','BookController@index')->name('book.index');
Route::post('/','BookController@store')->name('book.store')->middleware('auth');
route::get('/create','BookController@create')->name('book.create')->middleware('auth');
route::get('/{book}','BookController@show')->name('book.show');
route::put('/{book}','BookController@update')->name('book.update');
route::delete('/{book}','BookController@destroy')->name('book.delete')->middleware('auth');
route::get('/{book}/edit','BookController@edit')->name('book.edit')->middleware('auth');
