<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Role;
use App\Models\Origin;
use App\Models\Rating;
use App\Models\CarBrand;
use App\Models\Workshop;
use App\Models\Facility;
use App\Models\Specialty;
use App\Models\FacilityWorkshop;
use App\Models\WorkshopPrice;
use App\Models\Workhour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function test(){
        $user = Workshop::find(1);
       // $role = Role::all();
        return view('home', ['user' => $user,'title' => "Beranda"]);
    }

    // kalau mau pake foreach loop, define id superclass
    // public function test(){
    //     $user = User::find(1);
    //     $car = Car::find(1);
    //     return view('home', ['user' => $user, 'car' => $car, 'title' => "Beranda"]);
    // }
}
