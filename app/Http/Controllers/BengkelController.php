<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Subdistrict;
use App\Models\Specialty;
use App\Models\CarBrand;
use Illuminate\Support\Facades\DB;

class BengkelController extends Controller
{
    public function showAll(Request $req)
    {
        $reqspec = $req->specialty;
        $reqbrand = $req->brand;
        // dd($reqbrand);
        $search = $req->search;
        // $subdistrict = $req->subdistrict;

        $query = Workshop::select('*')//->distinct()
                ->leftjoin('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
                ->leftjoin('car_brand_workshop', 'car_brand_workshop.workshop_id', '=', 'workshops.id')
                ->withAvg('ratings', 'rate')->where('name', 'LIKE', "%$search%")
                // ->where('specialty_id', $req->specialty)
                ->groupBy('workshops.id');
                // ->distinct();
                // ->paginate(16);

        // dd($query->all());

        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $brand = CarBrand::all();

        if(isset($req->subdistrict) && ($req->subdistrict != null)){
            $query = $query->where('subdistrict_id', $req->subdistrict);
        }

        if(isset($req->specialty) && ($req->specialty != null)){
            // $query = $query->where(function($specialtyQuery) {
            //     $specialtyQuery->where('specialty_id', $reqspec);
            //     foreach ($reqspec as $s) {
            //         $query = $query->orWhere('specialty_id', $s);
            //     }
            // });
            $query = $query->whereIn('specialty_id', $reqspec);
            // foreach ($reqspec as $s) {
            //     $query = $query->orWhere('specialty_id', $s);
            // }
        }

        if (isset($req->brand) && ($req->brand != null)){
            // if(isset($req->specialty) && ($req->specialty != null)){
                // foreach ($reqbrand as $b) {
                    $query = $query->whereIn('car_brand_id', $reqbrand);
                // }
            // }
            // else{
            //     $query = $query->whereIn('car_brand_id', $req->brand);
            //     foreach ($reqbrand as $b) {
            //         $query = $query->whereIn('car_brand_id', $b);
            //     }
            // }
        }

        $limit = 16;
        $workshop = $query->get();
        // $workshop = $workshop->paginate(15);

        // dd($query);
        // dd($workshop->all());
        // return $workshop;

        return view('bengkel', compact('search', 'workshop', 'subdistrict', 'specialty', 'brand'),
                    ['title' => "Bengkel"]
        );
    }

    // public function filter($filter)
    // {
    //     $workshop = ;

    //     return view('bengkel');
    // }
}
