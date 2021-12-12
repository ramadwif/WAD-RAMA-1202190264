<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_vaccine;
use App\Http\Controllers\controller_patient;
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

Route::get('/home', function () {
    return view('rama_home', [
    "title" => "Home"    
    ]);
    
});

Route::get('/vaccine', function () {
    return view('rama_vaccine', [
    "title" => "Vaccine"
    ]);
    
});


Route::get('/vaccine_input', function () {
    return view('vaccine_input', [
        "title" => "Vaccine"
    ]);
});

Route::get('/vaccine_list', function () {
    return view('vaccine_list', [
        "title" => "Vaccine"
    ]);
});

Route::get('/vaccine_pilihan', function () {
    return view('vaccine_pilihan', [
        "title" => "Vaccine"
    ]);
});

Route::get('/vaccine_update', function () {
    return view('vaccine_update', [
        "title" => "Patient"
    ]);
});

Route::get('/patient', function () {
    return view('rama_patient', [
    "title" => "Patient"
    ]);
    
});

Route::get('/patient_register', function () {
    return view('patient_register', [
        "title" => "Patient"
    ]);
});

Route::get('/patient_update', function () {
    return view('patient_update', [
        "title" => "Patient"
    ]);
});

Route::get('/patient_list', function () {
    return view('patient_list', [
        "title" => "Patient"
    ]);
});

Route::resource('/vaccine',controller_vaccine::class);
Route::resource('/patient',controller_patient::class);