<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Subdistrict;
use App\Models\Specialty;
use App\Models\Facility;
use App\Models\CarBrand;
use Illuminate\Support\Facades\DB;

class BengkelController extends Controller
{
    public function showAll(Request $req)
    {
        $reqspec = $req->specialty;
        $reqbrand = $req->brand;
        $search = $req->search;
        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $brand = CarBrand::all();

        $query = Workshop::select('workshops.*','specialties.name AS specialty_name',
                                    'specialty_workshop.specialty_id', 'car_brand_workshop.car_brand_id',
                                    'subdistricts.name AS subdistrict_name')
                ->leftjoin('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
                ->leftjoin('car_brand_workshop', 'car_brand_workshop.workshop_id', '=', 'workshops.id')
                ->leftjoin('specialties', 'specialties.id', '=', 'specialty_workshop.specialty_id')
                ->leftjoin('subdistricts', 'subdistricts.id', '=', 'workshops.subdistrict_id')
                ->leftjoin('car_brands', 'car_brands.id', '=', 'car_brand_workshop.car_brand_id')
                ->withAvg('ratings', 'rate');

        if (isset($req->search) && ($req->search != null)) {
            $query = $query->where('workshops.name', 'LIKE', "%$search%")
                    ->orWhere('specialties.name', 'LIKE', "%$search%")
                    ->orWhere('subdistricts.name', 'LIKE', "%$search%")
                    ->orWhere('car_brands.name', 'LIKE', "%$search%");
        }

        if(isset($req->subdistrict) && ($req->subdistrict != null)){
            $query = $query->where('subdistrict_id', $req->subdistrict);
        }

        if(isset($req->specialty) && ($req->specialty != null)){
            $query = $query->whereIn('specialty_id', $reqspec);
        }

        if (isset($req->brand) && ($req->brand != null)){
            $query = $query->whereIn('car_brand_id', $reqbrand);
        }

        $limit = 16;
        $workshop = $query->groupBy('workshops.id')->get();

        return view('bengkel', compact('search', 'workshop', 'subdistrict', 'specialty', 'brand'),
                    ['title' => "Bengkel"]
        );
    }

    public function add()
    {
        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $facility = Facility::all();
        $car_brand = CarBrand::all();

        return view('tambah-bengkel', compact('subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Bengkel']);
    }

    public function addWorkshop(Request $req)
    {
        $name = $req->name;
        $subdistrict = $req->subdistrict_id;
        $address = $req->address;
        $phone_number = $req->phone_number;
        $about = $req->about;

        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $facility = Facility::all();
        $car_brand = CarBrand::all();

        return view('tambah-bengkel2', compact('subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Bengkel']);
    }

    public function add2()
    {
        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $facility = Facility::all();
        $car_brand = CarBrand::all();

        return view('tambah-bengkel2', compact('subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Detail Bengkel']);
    }
}
