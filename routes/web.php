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

Route::get('/daftar', [RegisterController::class, 'show'])->name('register.show');
Route::post('/daftar', [RegisterController::class, 'submit'])->name('register.submit');

Route::get('/datakendaraan', [VehicleController::class, 'show'])->name('vehicle.show');
Route::post('/datakendaraan', [VehicleController::class, 'store'])->name('vehicle.store');

Route::get('/masuk', [LoginController::class, 'show'])->name('login.show');
Route::post('/masuk', [LoginController::class, 'submit'])->name('login.submit');

Route::get('/bengkel', [BengkelController::class, 'showAll']);
// Route::get('/bengkel', function () {
//     return view('bengkel', [
//         "title" => "Bengkel"
//         ]);
// });

Route::get('/tentangkami',[TentangKamiController::class, 'index']);

Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Bantuan"
        ]);
});

Route::get('/bengkelDetail/{id}',[BengkelDetailController::class, 'test']);

Route::get('/profile/{id}?', [UserController::class, 'viewProfile']);

Route::get('/review/{id}',[ReviewController::class, 'test']);

Route::post('/review/{id}',[ReviewController::class, 'sort']);
