<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Role;
use App\Models\Origin;
use App\Models\Review;
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
    public function view(Request $search){
        // $user = Workshop::findOrFail(1);
        // $search = $req->search;
        // $querySearch = Workshop::select('*')
        //                 ->leftjoin('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
        //                 ->leftjoin('car_brand_workshop', 'car_brand_workshop.workshop_id', '=', 'workshops.id')
        //                 ->leftjoin('specialties', 'specialties.id', '=', 'specialty_workshop.specialty_id')
        //                 ->leftjoin('subdistricts', 'subdistricts.id', '=', 'workshops.subdistrict_id');


       $workshop = Workshop::select('*')
                    //    ->join('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
                    //    ->join('car_brand_workshop', 'car_brand_workshop.workshop_id', '=', 'workshops.id')
                    ->withAvg('reviews', 'rating')
                    // ->where('specialty_id', $req->specialty)
                    ->orderBy('reviews_avg_rating', 'desc')->paginate(4);

        $specialty = Specialty::All();

        $countWorkshop = Workshop::where('is_active', '1')->count('id');
        $getCountCustomer= Review::select('user_id')->groupBy('user_id')->get();
        $countCustomer = 0;
        foreach ($getCountCustomer as $C) {
            $countCustomer++;
        };
        $countUser = User::count('id');
        $countBrand = CarBrand::count('id');

        return view('home', ['workshop' => $workshop, 'specialty' => $specialty,
                    'countWorkshop' => $countWorkshop, 'countCustomer' => $countCustomer,
                    'countUser' => $countUser, 'countBrand' => $countBrand,
                    'search' => $search, 'title' => "Beranda"]);
    }

    // kalau mau pake foreach loop, define id superclass
    // public function test() {
    //     $user = User::find(1);
    //     $car = Car::find(1);
    //     return view('home', ['user' => $user, 'car' => $car, 'title' => "Beranda"]);
    // }
}
