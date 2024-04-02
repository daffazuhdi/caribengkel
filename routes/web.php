<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BengkelDetailController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WriteReviewController;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Beranda"
//         ]);
// });
Route::get('/',[HomePageController::class, 'test'])->name('home');
// Route::get('/',[BengkelController::class, 'showAll']);

Route::get('/daftar', [RegisterController::class, 'show'])->name('register.show');
Route::post('/daftar', [RegisterController::class, 'submit'])->name('register.submit');

Route::get('/datakendaraan', [VehicleController::class, 'show'])->name('vehicle.show');
Route::post('/datakendaraan', [VehicleController::class, 'store'])->name('vehicle.store');

Route::get('/masuk', [LoginController::class, 'show'])->name('login.show');
Route::post('/masuk', [LoginController::class, 'submit'])->name('login.submit');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/bengkel', [BengkelController::class, 'showAll'])->name('bengkel');
Route::get('/bengkel', [BengkelController::class, 'showAll'])->name('bengkel');
// Route::get('/bengkel', function () {
//     return view('bengkel', [
//         "title" => "Bengkel"
//         ]);
// });

Route::get('/tambah-bengkel', [BengkelController::class, 'add']);
Route::post('/tambah-bengkel', [BengkelController::class, 'addWorkshop']);
Route::get('/tambah-bengkel-back/{id}', [BengkelController::class, 'removeWorkshop']);

// Route::get('/tambah-bengkel-detail', [BengkelController::class, 'showWorkshopDetail']);
Route::post('/tambah-bengkel-detail', [BengkelController::class, 'addWorkshopDetail']);
Route::get('/tambah-bengkel-detail-back/{id}', [BengkelController::class, 'removeWorkshopDetail']);

Route::post('/tambah-bengkel-detail-harga', [BengkelController::class, 'addWorkshopPrice']);

Route::get('/tentangkami',[TentangKamiController::class, 'index']);

Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Bantuan"
        ]);
});

Route::get('/bengkelDetail/{id}',[BengkelDetailController::class, 'test']);

Route::get('/profil', [UserController::class, 'viewProfile'])->name('profile.view');
Route::post('/profil', [UserController::class, 'update'])->name('profile.update');
Route::get('/ubah-profil', [UserController::class, 'detail']);

Route::get('/kendaraan-{id}', [VehicleController::class, 'view']);
Route::post('/kendaraan-{id}', [VehicleController::class, 'update']);

Route::get('/tambah-kendaraan', [VehicleController::class, 'showToAdd']);
Route::post('/tambah-kendaraan', [VehicleController::class, 'store']);

Route::get('/review/{id}',[ReviewController::class, 'test']);
Route::get('/review/{id}/{sort}',[ReviewController::class, 'sort']);

Route::get('/writeReview/{id}/',[WriteReviewController::class, 'showReview']);
Route::post('/writeReview/{id}/',[WriteReviewController::class, 'writeReview']);


Route::get('/coba', function () {
    return view('tambah-bengkel3', [
    return view('tambah-bengkel3', [
        "title" => "Bengkel"
        ]);
});
