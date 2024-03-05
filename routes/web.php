<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\HomePageController;
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

Route::get('/bengkel', function () {
    return view('bengkel', [
        "title" => "Bengkel"
        ]);
});

Route::get('/tentangkami',[TentangKamiController::class, 'index']);

Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Bantuan"
        ]);
});
