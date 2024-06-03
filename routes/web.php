<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\KlinikKesehatanController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
  return view('layouts.welcome');
});

Route::get('home', function () {
  return view('auth.dashboard');
});
Route::get('Dokter', function () {
  return view('Dokter.index');
});
    
Route::controller(AuthController::class)->group(function() {
  // register form
  Route::get('/register', 'register')->name('auth.register');
  // store register
  Route::post('/store', 'store')->name('auth.store');
  // login form
  Route::get('/login', 'login')->name('auth.login');
  // auth proses
  Route::post('/auth', 'auth')->name('auth.authentication');
  // logout
  Route::post('/logout', 'logout')->name('auth.logout');
  // dashboard page
  Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
});


    

Route::resource('/Dokter', DokterController::class);
Route::resource('/Pasien', PasienController::class);
Route::resource('/Obat', ObatController::class);
Route::resource('/diagnosa', DiagnosaController::class);
Route::resource('/rekam', RekamController::class);
Route::resource('/KlinikKesehatan', KlinikKesehatanController::class);