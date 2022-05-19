<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PjController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PulauController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\RumahMakanController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\KulinerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\WisataUserController;
use App\Http\Controllers\Admin\PenginapanController;
use App\Http\Controllers\User\KulinerUserController;
use App\Http\Controllers\User\PenginapanUserController;

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


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/profil', function () {
    return view('layouts/profil');
});

//Root Admin and User

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::middleware(['auth', 'IsAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 });

Route::get('/wisata', function () {
    return view('pages/wisata');
});

Route::get('/penginapan', function () {
    return view('pages/penginapan');
});


//tampilan Kuliner
Route::get('/kuliner_user',[KulinerUserController::class, 'index']);
Route::get('kuliner_pulau/{pulau_id}',[KulinerUserController::class, 'pulaukategorikuliner'])
->name('pulaukategorikuliner');
Route::get('kuliner_pulau/{pulau_id}/{kuliner_id}',[KulinerUserController::class, 'KuDet']);

//tampilan Wisata
Route::get('/wisata_user',[WisataUserController::class, 'index']);  
Route::get('wisata_pulau/{pulau_id}', [WisataUserController::class,'pulaukategoriwisata'])
->name('pulaukategoriwisata');
Route::get('wisata_pulau/{pulau_id}/{wisata_id}',[WisataUserController::class, 'WiDet']);
// Route::get('list_wisata/{pulau_id}/{wisata_list_id}',[WisataUserController::class, 'WisList']);

//tampilan Penginapan
Route::get('/penginapan_user',[PenginapanUserController::class, 'index']);
Route::get('penginapan_pulau/{pulau_id}',[PenginapanUserController::class, 'pulaukategoripenginapan'])
->name('pulaukategoripenginapan');
Route::get('penginapan_pulau/{pulau_id}/{penginapan_id}',[PenginapanUserController::class, 'pengDet']);



//route_kuliner
// tampil
Route::get('/kuliner-admin',[KulinerController::class, 'index'])
->name('kuliner-admin');

// Tambah
// memanggil View
Route::get('/kuliner/tambah',[KulinerController::class,'tambah']);
Route::get('/kuliner/show/{id}',[KulinerController::class,'show']);
// proses_POST
Route::post('/kuliner',[KulinerController::class,'store']);
// Edit
Route::get('/kuliner/{id}/edit',[KulinerController::class,'edit']);
Route::put('/kuliner/{id}',[KulinerController::class,'update']);
// Delete
Route::delete('kuliner/{id}', [KulinerController::class, 'destroy']);
Route::resource('kuliner', KulinerController::class);


//route wisata
// tampil
Route::get('/wisata-admin',[WisataController::class, 'index']);
Route::get('/wisata/show/{id}',[WisataController::class,'show']);
// tambah
Route::get('/wisata_tambah',[WisataController::class, 'tambah']);

Route::post('/wisata_tambah',[WisataController::class,'store']);

Route::get('/wisata/{id}/edit',[WisataController::class,'edit']);

Route::put('/wisata/{id}',[WisataController::class,'update']);

Route::delete('wisata/{id}', [WisataController::class, 'destroy']);



//route penginapan
Route::get('/penginapan-admin',[PenginapanController::class, 'index']);
// tambah
Route::get('/penginapan_tambah',[PenginapanController::class, 'tambah']);
Route::post('/penginapan_tambah',[PenginapanController::class,'store']);

Route::get('/penginapan/{id}/edit',[PenginapanController::class,'edit']);
Route::put('/penginapan/{id}',[PenginapanController::class,'update']);

Route::delete('penginapan/{id}', [PenginapanController::class, 'destroy']);



 //booking
 Route::post('booking', [BookingsController::class, 'index'])->name('booking');
 Route::get('booking_sukses', [BookingsController::class, 'sukses_booking']);
 Route::get('booking_tampil', [BookingsController::class, 'tampil_booking']);
 Route::get('booking_tampil/{id}/edit', [BookingsController::class, 'edit']);
 Route::put('booking_tampil/{id}', [BookingsController::class, 'update']);
 Route::delete('/booking/{id}', [BookingsController::class, 'destroy']);


//  //route_Pjs
// Route::resource('pjs', PjController::class);
Route::get('/pjs',[PjController::class, 'index']);
Route::get('/pjs_tambah',[PjController::class, 'tambah']);
Route::post('/simpan_pjs',[PjController::class,'store']);
Route::get('/pjs/{id}/edit',[PjController::class,'edit']);
Route::put('/pjs/{id}',[PjController::class,'update']);
Route::delete('/pjs/{id}', [PjController::class, 'destroy']);

//route_rumah_makan
Route::resource('Rms', RumahMakanController::class);

