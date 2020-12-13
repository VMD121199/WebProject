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
Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/tieuchuan', 'TieuchuanController@index')->name('tieuchuan');
	Route::match(['get', 'post'],'/themtieuchuan', 'TieuchuanController@add')->name('themtieuchuan');

	Route::get('/minhchung', 'MinhchungController@index')->name('minhchung');
	Route::match(['get', 'post'],'/themminhchung', 'MinhchungController@create')->name('themminhchung');
	Route::match(['get', 'post'],'/suaminhchung/{id}', 'MinhchungController@edit')->name('suaminhchung');
	Route::get('/xoaminhchung/{id}', 'MinhchungController@delete');
	Route::match(['get', 'post'],'/timminhchung', 'MinhchungController@search')->name('timminhchung');

	Route::get('/tieuchi', 'TieuchiController@index')->name('tieuchi');
	Route::match(['get', 'post'],'/themtieuchi', 'TieuchiController@create')->name('themtieuchi');
	Route::match(['get', 'post'],'/danhgiatieuchi', 'TieuchiController@danhgia')->name('danhgiatieuchi');

	Route::get('/danhsachbaocao', 'BaocaoController@index')->name('danhsachbaocao');
	Route::get('/vietbaocao', 'BaocaoController@create')->name('vietbaocao');
	
});