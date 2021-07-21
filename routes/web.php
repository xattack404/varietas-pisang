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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('panel/signout', ['as' => 'signout', 'uses' => 'Auth\LoginController@signout']);

//Route Menu Jenis Pisang
Route::get('panel/jenispisang', ['as' => 'jenispisang.index', 'uses' => 'JenisPisangController@index']);
Route::get('panel/jenispisang/create', ['as' => 'jenispisang.create', 'uses' => 'JenisPisangController@create']);
Route::post('panel/jenispisang/create', ['as' => 'jenispisang.store', 'uses' => 'JenisPisangController@store']);
Route::get('panel/jenispisang/edit/{id}', ['as' => 'jenispisang.edit', 'uses' => 'JenisPisangController@edit']);
Route::put('panel/jenispisang/edit/{id}', ['as' => 'jenispisang.update', 'uses' => 'JenisPisangController@update']);
Route::get('panel/jenispisang/delete/{id}', ['as' => 'jenispisang.delete', 'uses' => 'JenisPisangController@delete']);

//Route Menu Varietas
Route::get('panel/varietas', ['as' => 'varietas.index', 'uses' => 'VarietasController@index']);
Route::get('panel/varietas/create', ['as' => 'varietas.create', 'uses' => 'VarietasController@create']);
Route::post('panel/varietas/create', ['as' => 'varietas.store', 'uses' => 'VarietasController@store']);
Route::get('panel/varietas/edit/{id}', ['as' => 'varietas.edit', 'uses' => 'VarietasController@edit']);
Route::put('panel/varietas/edit/{id}', ['as' => 'varietas.update', 'uses' => 'VarietasController@update']);
Route::get('panel/varietas/delete/{id}', ['as' => 'varietas.delete', 'uses' => 'VarietasController@delete']);


//Route Menu Cek Jenis Pisang
Route::get('panel/cekpisang', ['as' => 'cekpisang.index', 'uses' => 'CekPisangController@index']);
Route::get('panel/cekpisang/proses', ['as' => 'cekpisang.proses', 'uses' => 'CekPisangController@prosescek']);
