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
    return view('welcome');
});

Route::get('/parkir', 'parkirController@index');
Route::get('/parkir/create', 'parkirController@create');
Route::post('/parkir/create', 'parkirController@store');
Route::get('/parkir/karcis', 'parkirController@karcis');
Route::get('/parkir/bayar/{parkir}', 'parkirController@bayar');


Route::get('/parkir/laporan', 'laporanController@index');
Route::post('/parkir/laporan/{parkir}', 'laporanController@hasilLaporan');
