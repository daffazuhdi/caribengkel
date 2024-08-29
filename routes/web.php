<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authorization;
use App\Http\Middleware\AuthorizationSuperAdmin;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BengkelDetailController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarController;
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
Route::get('/',[HomePageController::class, 'view'])->name('home');
// Route::get('/',[BengkelController::class, 'showAll']);

Route::get('/daftar', [RegisterController::class, 'show'])->name('register.show')->middleware('guest');
Route::post('/daftar', [RegisterController::class, 'submit'])->name('register.submit');

Route::get('/data-kendaraan', [CarController::class, 'show'])->name('vehicle.show')->middleware('auth.first'); // harusnya cuma bisa diakses abis regist
Route::post('/data-kendaraan', [CarController::class, 'store'])->name('vehicle.store');

Route::get('/masuk', [LoginController::class, 'show'])->name('login.show')->middleware('guest');
Route::post('/masuk', [LoginController::class, 'submit'])->name('login.submit');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/bengkel', [BengkelController::class, 'showAll'])->name('bengkel');

Route::get('/tambah-bengkel', [BengkelController::class, 'add'])->middleware(Authorization::class);
Route::post('/tambah-bengkel', [BengkelController::class, 'addWorkshop']);
Route::get('/tambah-bengkel-back/{id}', [BengkelController::class, 'removeWorkshop'])->middleware(Authorization::class);;

// Route::get('/tambah-bengkel-detail', [BengkelController::class, 'showWorkshopDetail']);
Route::post('/tambah-bengkel-detail', [BengkelController::class, 'addWorkshopDetail']);
Route::get('/tambah-bengkel-detail-back/{id}', [BengkelController::class, 'removeWorkshopDetail'])->middleware(Authorization::class);;

Route::post('/tambah-bengkel-detail-harga', [BengkelController::class, 'addWorkshopPrice']);

Route::get('/ubah-bengkel/{id}', [BengkelController::class, 'edit'])->middleware(Authorization::class);;
Route::post('/ubah-bengkel/{id}', [BengkelController::class, 'update']);
Route::post('/ubah-bengkel-detail/{id}', [BengkelController::class, 'updateWorkshopDetail']);
Route::post('/ubah-bengkel-harga/{id}', [BengkelController::class, 'updateWorkshopPrice']);
// Route::get('/ubah-bengkel-detail-harga-{id}', [BengkelController::class, 'updatePrice']);

Route::get('/tentang-kami',[TentangKamiController::class, 'index']);

Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Bantuan"
        ]);
});

Route::get('/bengkel/{id}',[BengkelDetailController::class, 'view']);
Route::post('/bengkel-detail/{id}', [BengkelController::class, 'delete']);

Route::get('/profil', [UserController::class, 'view'])->name('profile.view')->middleware('auth');
Route::post('/profil', [UserController::class, 'update'])->name('profile.update');
Route::get('/ubah-profil', [UserController::class, 'detail'])->middleware('auth');

Route::get('/kendaraan/{id}', [CarController::class, 'view'])->middleware('auth');
Route::post('/kendaraan/{id}', [CarController::class, 'update'])->name('vehicle.update');
Route::post('/hapus-kendaraan/{id}', [CarController::class, 'delete']);

Route::get('/tambah-kendaraan', [CarController::class, 'showToAdd'])->middleware('auth');
Route::post('/tambah-kendaraan', [CarController::class, 'store']);

Route::get('/ulasan/{id}',[ReviewController::class, 'view'])->name('review.show');
Route::get('/ulasan/{id}/{sort}',[ReviewController::class, 'sort']);

Route::get('/tulis-ulasan/{id}/',[WriteReviewController::class, 'showReview'])->middleware('auth');
Route::post('/tulis-ulasan/{id}/',[WriteReviewController::class, 'writeReview']);

Route::get('/terima-bengkel/{id}', [BengkelController::class, 'approveWorkshop']);
Route::post('/tolak-bengkel/{id}', [BengkelController::class, 'rejectWorkshop']);

Route::get('/semua-user', [UserController::class, 'viewAllUser'])->middleware(AuthorizationSuperAdmin::class);

// Route::get('/coba', function () {
//     return view('nyoba', [
//         "title" => "Bengkel"
//         ]);
// });

// Route::get('/testing/add/{id}', function () {
//     return view('tambah-bengkel2', [
//         "title" => "Tambah Bengkel"
//         ]);
// });
