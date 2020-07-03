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

Route::get('/', function () {
    return view('home');
});

Route::get('/data-tables', function () {
    return view ('datatables');
}); 


Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan/store','PertanyaanController@store');
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index')->name('jawaban');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');