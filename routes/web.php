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
Route::get('/data/{id}','DataController@editBaru')->name('editBaru');
Route::put('/updateBaru/{id}','DataController@updateBaru')->name('updateBaru');
Route::post('/storeBaru','DataController@storeBaru')->name('storeBaru');

Route::get('/', 'DataController@index')->name('index');
Route::get('/create', 'DataController@create')->name('create');


Route::get('/datadelete/{id}', 'DataController@destroy')->name('destroydata');
Route::get('/findbyage', 'DataController@findByAge')->name('findbyage');
Route::get('/findbyphoto', 'DataController@findByPhoto')->name('findbyphoto');
Route::get('/search', 'DataController@searchByKecamatan')->name('search');
Route::get('/findbyname', 'DataController@findByName')->name('findbyname');

