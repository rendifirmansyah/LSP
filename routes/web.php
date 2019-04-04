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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('master', 'MasterController@index');
Route::get('informasi', 'MasterController@informasi');
Route::post('informasi/update', 'MasterController@update_informasi');
Route::post('informasi/post', 'PostController@post_informasi');

Route::get('user', 'MasterController@user');

Route::get('list_barang', 'MasterController@list_barang');
Route::get('tambah_barang', 'MasterController@tambah_barang');

Route::get('list_user', 'MasterController@list_user');
Route::get('tambah_user', 'MasterController@tambah_user');

Route::get('data_informasi', 'MasterController@data_informasi');
Route::get('data_barang', 'MasterController@data_barang');

Route::post('kategori/post', 'PostController@post_kategori');
Route::post('unit/post', 'PostController@post_unit');
Route::post('curr/post', 'PostController@post_curr');


Route::get('delete/kategori/{id}', 'MasterController@delete_kategori');
Route::get('delete/unit/{id}', 'MasterController@delete_unit');
Route::get('delete/curr/{id}', 'MasterController@delete_curr');


