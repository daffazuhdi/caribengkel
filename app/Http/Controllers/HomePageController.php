<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Role;
use App\Models\Origin;
use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    //
    public function test(){
        $user = Car::all();
        return view('home', ['user' => $user, 'title' => "Beranda"]);
    }
}
