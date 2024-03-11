<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class BengkelController extends Controller
{
    public function showAll()
    {
        $workshop = Workshop::all();
        return view('bengkel', ['workshop' => $workshop], ['title' => "Bengkel"]);
    }
}
