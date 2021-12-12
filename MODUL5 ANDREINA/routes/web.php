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
    return view('home/landing');
});

// Route::get('/vaccines', function () {
//     return view('vaccines/vaccines');
// });

Route::get('/patients', function () {
    return view('patient/patients');
});

// Route::get('/daftar', function () {
//     return view('vaccines/daftar');
// });

// vaccine
Route::get('vaccines','\App\Http\Controllers\vaccineController@vaccines');
Route::get('daftar','\App\Http\Controllers\vaccineController@daftar');
Route::post('simpan_daftar','\App\Http\Controllers\vaccineController@simpan_daftar');
Route::get('vaccines/delete/{id}','\App\Http\Controllers\vaccineController@delete');
Route::get('vaccines/edit/{id}','\App\Http\Controllers\vaccineController@edit');
Route::post('/vaccines_update','\App\Http\Controllers\vaccineController@update');

// patients
Route::get('registrasi','\App\Http\Controllers\vaccineController@registrasi');