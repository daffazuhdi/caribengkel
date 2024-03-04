<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Beranda"
        ]);
});

Route::get('/bengkel', function () {
    return view('bengkel', [
        "title" => "Bengkel"
        ]);
});

Route::get('/tentangkami', function () {
    $isian = [
        [
            "title" => "judul pertama",
            "author" => "pertama"
        ],
        [
            "title" => "judul kedua",
            "author" => "kedua"
        ]
    ];
    return view('tentangKami', [
        "title" => "Tentang Kami",
        "posts" => $isian
        ]);
});

Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Bantuan"
        ]);
});
