<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BengkelDetailController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\UserController;
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
Route::get('/',[HomePageController::class, 'test']);

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
