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

// Route::get('/patients', function () {
//     return view('patient/pasienLanding');
// });

// Route::get('/daftar', function () {
//     return view('vaccines/daftar');
// });

// vaccine
Route::get('/vaccines','\App\Http\Controllers\vaccineController@vaccines');
Route::get('daftar','\App\Http\Controllers\vaccineController@daftar');
Route::post('simpan_daftar','\App\Http\Controllers\vaccineController@simpan_daftar');
Route::get('vaccines/delete/{id}','\App\Http\Controllers\vaccineController@delete');
Route::get('vaccines/edit/{id}','\App\Http\Controllers\vaccineController@edit');
Route::post('/vaccines_update','\App\Http\Controllers\vaccineController@update');

// patients
Route::get('/patients','\App\Http\Controllers\patientController@landing');
Route::get('/daftar_pasien','\App\Http\Controllers\patientController@selectVaccine');
Route::get('patients/daftar_pasien/{id}','\App\Http\Controllers\patientController@tambahPasien');
Route::post('/regisPasien','\App\Http\Controllers\patientController@regisPasien');
Route::post('/pasien_update','\App\Http\Controllers\patientController@pasien_update');
Route::get('patient/updatePasien/{id}','\App\Http\Controllers\patientController@updatePasien');
Route::get('patient/delete/{id}','\App\Http\Controllers\patientController@delete');
