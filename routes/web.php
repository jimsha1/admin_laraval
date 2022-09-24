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

Route::get('/','HomeController@index')->name('index');
Route::get('/home','HomeController@home')->name('content');
Route::get('/login','HomeController@login')->name('login');
Route::get('/register','HomeController@register')->name('register');
Route::get('/forgotpassword','HomeController@forgot')->name('forgot');
Route::get('/recoverpassword','HomeController@recover')->name('recover');
Route::get('/table','HomeController@table')->name('tab');
Route::post('/regiser','HomeController@registers')->name('registers');
Route::get('/form','HomeController@form')->name('form');
Route::post('/form','HomeController@forms')->name('forms');
Route::get('/product','HomeController@product')->name('product');
Route::post('/product','HomeController@add_product')->name('add_product');
Route::get('deleteproduct/{id}','HomeController@delete_product')->name('delete');
Route::get('editproduct\{id}','HomeController@edit_product')->name('edit');
Route::post('/updateproduct','HomeController@update_product')->name('update_product');