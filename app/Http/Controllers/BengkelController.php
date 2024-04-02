<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Subdistrict;
use App\Models\Specialty;
use App\Models\Facility;
use App\Models\CarBrand;
use App\Models\SpecialtyWorkshop;
use App\Models\FacilityWorkshop;
use App\Models\CarBrandWorkshop;
use App\Models\Workhour;
use App\Models\Service;
use App\Models\WorkshopPrice;
use Illuminate\Support\Facades\Storage;
use App\Models\SpecialtyWorkshop;
use App\Models\FacilityWorkshop;
use App\Models\CarBrandWorkshop;
use App\Models\Workhour;
use App\Models\Service;
use App\Models\WorkshopPrice;
use Illuminate\Support\Facades\Storage;
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

    public function addWorkshop(Request $req1)
    public function addWorkshop(Request $req1)
    {

        $name = $req1->name;
        $subdistrict = $req1->subdistrict_id;
        $address = $req1->address;
        $phone_number = $req1->phone_number;
        $about = $req1->about;

        if(is_null($req1->photo) == false)
        {
            $file = $req1->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = $name.'.'.time().'.'.$extension;

            Storage::putFileAs('public/workshop', $file, $fileName);

            $createWorkshop = Workshop::create([
                'name' => $req1->name,
                'subdistrict_id' => $req1->subdistrict_id,
                'address' => $req1->address,
                'phone_number' => $req1->phone_number,
                'about' => $req1->about,
                'photo' => $fileName
            ]);

        $id = $createWorkshop->id;

        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $facility = Facility::all();
        $car_brand = CarBrand::all();

        return view('tambah-bengkel2', compact('id', 'subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Bengkel']);
        }
        return view('tambah-bengkel2', compact('id', 'subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Bengkel']);
        }
    }

    public function addWorkshopDetail(Request $req2)
    {
        $workhour = $req2->day;

        foreach ($req2->specialty as $s) {
            SpecialtyWorkshop::create([
                'workshop_id' => $req2->workshop_id,
                'specialty_id' => $s
            ]);
        }

        foreach ($req2->facility as $f) {
            FacilityWorkshop::create([
                'workshop_id' => $req2->workshop_id,
                'facility_id' => $f
            ]);
        }

        foreach ($req2->car_brand as $cb) {
            CarBrandWorkshop::create([
                'workshop_id' => $req2->workshop_id,
                'car_brand_id' => $cb
            ]);
        }

        $day_id = 0;

        foreach ($workhour as $w) {
            if ($w === null) {
                $w = '-';
            }

            $day_id++;
            Workhour::create([
                'workshop_id' => $req2->workshop_id,
                'day_id' => $day_id,
                'working_hour' => $w
            ]);
        }

        $service = Service::select('*')->whereIn('specialty_id', $req2->specialty)->get();
        $workshop_id = $req2->workshop_id;

        return view('tambah-bengkel3', compact('workshop_id', 'service'), ['title' => 'Tambah Harga Bengkel']);
    }

    public function addWorkshopPrice(Request $req3)
    {
        $workshop_id = $req3->workshop_id;
        $serviceInput = $req3->service_id;
        $price = $req3->price;

        array_map(function($serviceInput, $price, $workshop_id) {
            WorkshopPrice::create([
                'workshop_id' => $workshop_id,
                'service_id' => $serviceInput,
                'price' => $price
             ]);

        }, $serviceInput, $price, $workshop_id);

        return redirect('/bengkel');
    }

    public function removeWorkshop($id)
    {
        Workshop::where('id', $id)->delete();
        return redirect()->back()->withInput();
    }

    public function removeWorkshopDetail($id)
    {
        SpecialtyWorkshop::where('workshop_id', $id)->delete();
        FacilityWorkshop::where('workshop_id', $id)->delete();
        CarBrandWorkshop::where('workshop_id', $id)->delete();
        Workhour::where('workshop_id', $id)->delete();
        WorkshopPrice::where('workshop_id', $id)->delete();

        $id = $id;
        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $facility = Facility::all();
        $car_brand = CarBrand::all();

        return view('tambah-bengkel2', compact('id', 'subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Bengkel']);
        return view('tambah-bengkel3', compact('workshop_id', 'service'), ['title' => 'Tambah Harga Bengkel']);
    }

    public function addWorkshopPrice(Request $req3)
    {
        // return $req3;

        $workshop_id = $req3->workshop_id;
        $serviceInput = $req3->service_id;
        $price = $req3->price;

        array_map(function($serviceInput, $price, $workshop_id) {
            WorkshopPrice::create([
                'workshop_id' => $workshop_id,
                'service_id' => $serviceInput,
                'price' => $price
             ]);

        }, $serviceInput, $price, $workshop_id);

        return redirect('/bengkel');
    }
}
