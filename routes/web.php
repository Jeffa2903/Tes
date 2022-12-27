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
Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/postlogout','LoginController@logout')->name('postlogout');


Route::get('/', function () {
    return view('main');
})->name('home');


Route::get('/indextiket','TiketController@index')->name('tiket.index');
Route::get('/createtiket','TiketController@create')->name('tiket.create');
Route::post('/simpantiket','TiketController@store')->name('tiket.store');
Route::get('/detailtiket','TiketController@show')->name('tiket.detail');
Route::get('/updatetiket/{id_tiket}','TiketController@edit')->name('tiket.update');
Route::get('/checktiket/{id_tiket}','TiketController@check')->name('tiket.check');
Route::get('/hapustiket/{id_tiket}','TiketController@destroy')->name('hapus');
Route::get('/caritiket','TiketController@cari')->name('tiket.cari');
