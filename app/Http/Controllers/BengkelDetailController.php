<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class BengkelDetailController extends Controller
{
    //
    public function test($id){
        $workshop = Workshop::find($id);
        return view('bengkelDetail', ['workshop' => $workshop,'title' => "Bengkel"]);
    }

}
