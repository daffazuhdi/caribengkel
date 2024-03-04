<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangKamiController extends Controller
{
    //
    public function index(){
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
    }
}
