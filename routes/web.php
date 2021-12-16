<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\NilaiController;

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
    return view('auth.login');
});

Auth::routes();

//Admin
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::resource('/users', UserController::class);
        Route::resource('/tahunakademik', TahunAkademikController::class);
        Route::resource('/jurusan', JurusanController::class);
        Route::resource('/kelas', KelasController::class);
        Route::resource('/mapel', MapelController::class);
        Route::resource('/jadwal', JadwalController::class);
        Route::resource('/krs', KrsController::class);
    });
    
//Guru
Route::middleware(['auth','guru'])
    ->group(function(){
        Route::get('/list-absen',[AbsenController::class, 'list'])->name('absen.list');
        Route::get('/list-nilai',[NilaiController::class, 'list'])->name('nilai.list');
    });

//auth
Route::middleware(['auth'])
    ->group(function(){
        Route::resource('absen', AbsenController::class);
        Route::resource('nilai', NilaiController::class);
        Route::resource('/dashboard', DashboardController::class);
        
    });