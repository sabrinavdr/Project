<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\RisikoController;
use App\Http\Controllers\PreservationController;
use App\Http\Controllers\PemantauanController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\AksesuserController;
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
Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});
Route::view('/role-akses', 'role-akses');
Route::view('/dashboard-produsen', 'dashboard-produsen');
Route::view('/disposisition', 'disposisition');
Route::view('/add-arsipMasuk','add-arsipMasuk');
Route::view('/edit-arsipMasuk','edit-arsipMasuk');
Route::view('/add-arsipKeluar','add-arsipKeluar');
Route::view('/edit-arsipKeluar','edit-arsipKeluar');


Route::view('/dashboard-manajemen', 'dashboard-manajemen');
Route::resource('/students', StudentController::class);
Route::resource('/masuks', MasukController::class);
Route::resource('/risks', RisikoController::class);
Route::resource('preservations', PreservationController::class);
Route::resource('/pemantauans', PemantauanController::class);
Route::resource('/dokumens', DokumenController::class);
Route::view('/arsipMasuk', 'arsipMasuk');
Route::view('/arsipDisposisi', 'arsipDisposisi');
Route::view('/arsipKeluar', 'arsipKeluar');
Route::view('/arsipDiarsipkan', 'arsipDiarsipkan');


Route::view('/dashboard-admin', 'dashboard-admin');
Route::resource('/aksesusers', AksesuserController::class);
Route::view('/akses-pengajuan', 'akses-pengajuan');
Route::view('/data-asal', 'data-asal');
Route::view('/data-jenis', 'data-jenis');
Route::view('/add-datajenis','add-datajenis');