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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class BengkelController extends Controller
{
    public function showAll(Request $req)
    {
        // return $req;
        $reqspec = $req->specialty;
        $reqbrand = $req->brand;
        $search = $req->search;
        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $brand = CarBrand::all();
        $filterSubdistrict = null;
        $filterSpecialty = null;
        $filterBrand = null;
        $countFilter = 0;

        $query = Workshop::select('workshops.*','specialties.name AS specialty_name',
                                    'specialty_workshop.specialty_id', 'car_brand_workshop.car_brand_id',
                                    'subdistricts.name AS subdistrict_name')
                ->leftjoin('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
                ->leftjoin('car_brand_workshop', 'car_brand_workshop.workshop_id', '=', 'workshops.id')
                ->leftjoin('specialties', 'specialties.id', '=', 'specialty_workshop.specialty_id')
                ->leftjoin('subdistricts', 'subdistricts.id', '=', 'workshops.subdistrict_id')
                ->leftjoin('car_brands', 'car_brands.id', '=', 'car_brand_workshop.car_brand_id')
                ->withAvg('ratings', 'rate')
                ->where('workshops.is_active', '=', '1');

        if (isset($req->search) && ($req->search != null)) {
            $query = $query->where('workshops.is_active', '=', '1')->where('workshops.name', 'LIKE', "%$search%")
                    ->orWhere('specialties.name', 'LIKE', "%$search%")
                    ->orWhere('subdistricts.name', 'LIKE', "%$search%")
                    ->orWhere('car_brands.name', 'LIKE', "%$search%");
                    // ->where('workshops.is_active', '=', '1');
        }

        if(isset($req->subdistrict) && ($req->subdistrict != null)){
            $query = $query->where('subdistrict_id', $req->subdistrict);
            $filterSubdistrict = $req->subdistrict;
            $countFilter++;
        }

        if(isset($req->specialty) && ($req->specialty != null)){
            $query = $query->whereIn('specialty_id', $reqspec);
            $filterSpecialty = $req->specialty;
            $countFilter = $countFilter + count($req->specialty);
        }

        if (isset($req->brand) && ($req->brand != null)){
            $query = $query->whereIn('car_brand_id', $reqbrand);
            $filterBrand = $req->brand;
            $countFilter = $countFilter + count($req->brand);
        }

        // $limit = 2;
        $workshops = $query->where('workshops.is_active', '=', '1')->groupBy('workshops.id');


        $workshops = $workshops->paginate(12);

        $begin = $workshops->firstItem();
        $end = $workshops->lastItem();
        $count = $workshops->total();

        // return $countFilter;

        return view('bengkel', compact('search', 'workshops', 'subdistrict', 'specialty', 'brand',
                    'filterSubdistrict', 'filterSpecialty', 'filterBrand', 'begin', 'end', 'count', 'countFilter'),
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
    {
        $rules = [
            'name' => 'required|string|max:255',
            'subdistrict_id' => 'required',
            'address' => 'required|string|max:500',
            'about' => 'required|string|max:500',
            'phone_number' => 'required|string|unique:App\Models\Workshop,phone_number|regex:/(0)[0-9]/|max:13',
            'photo' => 'required|mimes:jpg,png,jpeg,svg'
        ];

        $validator = Validator::make($req1->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $file = $req1->file('photo');
        $extension = $file->getClientOriginalExtension();
        $fileName = $req1->name.'.'.time().'.'.$extension;

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

    public function addWorkshopDetail(Request $req2)
    {
        $workhour = $req2->day;

    //    return $req2;

        $rules = [
            'specialty' => 'required',
            'facility' => 'required',
            'car_brand' => 'required'
        ];

        $validator = Validator::make($req2->all(), $rules);

        if($validator->fails()){
            $id = $req2->workshop_id;
            $specialty = Specialty::all();
            $facility = Facility::all();
            $car_brand = CarBrand::all();

            return view('tambah-bengkel2', compact('id', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Bengkel'])->withErrors($validator);
            // return back()->withErrors($validator);
        }

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
        $specialty = $req2->specialty;

        return view('tambah-bengkel3', compact('workshop_id', 'service', 'specialty'), ['title' => 'Tambah Harga Bengkel']);
    }

    public function addWorkshopPrice(Request $req3)
    {

        //    return $req3;
        $workshop_id = $req3->workshop_id;
        $serviceInput = $req3->service_id;
        $Fprice = $req3->price;

        $index = 0;
        foreach ($req3->price as $price) {
            if ($price === null) {
                $Fprice[$index] = '0';
            }
            $index++;
        }
        // return $Fprice;

        array_map(function($serviceInput, $Fprice, $workshop_id) {
            WorkshopPrice::create([
                'workshop_id' => $workshop_id,
                'service_id' => $serviceInput,
                'price' => $Fprice
             ]);

        }, $serviceInput, $Fprice, $workshop_id);

        Workshop::where('id', $workshop_id)->update([
            'is_active' => '1'
        ]);

        return redirect('/bengkel')->with('message', 'Bengkel berhasil ditambahkan!');
    }

    public function removeWorkshop($id)
    {
        Workshop::where('id', $id)->delete();
        // return redirect()->back()->withInput();

        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $facility = Facility::all();
        $car_brand = CarBrand::all();

        return view('tambah-bengkel', compact('subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Tambah Bengkel']);
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
    }

    public function delete($id)
    {
        Workshop::where('id', $id)->update([
            'is_active' => '0',
            'phone_number' => '-'
        ]);

        return redirect('/bengkel')->with('message', 'Bengkel berhasil dihapus!');
    }

    public function edit($id)
    {
        $workshop = Workshop::find($id);
        $subdistrict = Subdistrict::all();

        return view('ubah-bengkel', compact('workshop', 'subdistrict'), ['title' => 'Ubah Bengkel']);
    }

    public function update(Request $req1, $id)
    {
        // return $id;
        $workshop = Workshop::find($id);
        // return $workshop;

        if($req1->phone_number == $workshop->phone_number)
        {
            $rules = [
                // 'name' => 'required|string|max:255',
                'subdistrict_id' => 'required',
                'address' => 'required|string|max:500',
                'about' => 'required|string|max:500',
                'phone_number' => 'required|string|regex:/(0)[0-9]/|max:13',
                'photo' => 'mimes:jpg,png,jpeg,svg'
            ];
        }
        else {
            $rules = [
                // 'name' => 'required|string|max:255',
                'subdistrict_id' => 'required',
                'address' => 'required|string|max:500',
                'about' => 'required|string|max:500',
                'phone_number' => 'required|string|unique:App\Models\Workshop,phone_number|regex:/(0)[0-9]/|max:13',
                'photo' => 'mimes:jpg,png,jpeg,svg'
            ];
        }

        $validator = Validator::make($req1->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        if(is_null($req1->photo) == false)
        {
            $file = $req1->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = $req1->name.'.'.time().'.'.$extension;

            Storage::putFileAs('public/workshop', $file, $fileName);

            Workshop::where('id', $id)->update([
                'name' => $workshop->name,
                'subdistrict_id' => $req1->subdistrict_id,
                'address' => $req1->address,
                'phone_number' => $req1->phone_number,
                'about' => $req1->about,
                'photo' => $fileName
            ]);
        }
        else {
            Workshop::where('id', $id)->update([
                'name' => $workshop->name,
                'subdistrict_id' => $req1->subdistrict_id,
                'address' => $req1->address,
                'phone_number' => $req1->phone_number,
                'about' => $req1->about
            ]);
        }

        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $facility = Facility::all();
        $car_brand = CarBrand::all();

        return view('ubah-bengkel-detail', compact('workshop', 'subdistrict', 'specialty', 'facility', 'car_brand'), ['title' => 'Ubah Bengkel']);
    }

    public function updateWorkshopDetail(Request $req2, $id)
    {
        // return $req2;
        $workhour = $req2->day;
        $workshop = Workshop::find($id);

        $rules = [
            'specialty' => 'required',
            'facility' => 'required',
            'car_brand' => 'required'
        ];

        $validator = Validator::make($req2->all(), $rules);

        if($validator->fails()){
            // $id = $req2->workshop_id;
            $specialty = Specialty::all();
            $facility = Facility::all();
            $car_brand = CarBrand::all();

            return view('ubah-bengkel-detail', compact('specialty', 'facility', 'car_brand'), ['title' => 'Ubah Bengkel'])->withErrors($validator);
            // return back()->withErrors($validator);
        }

        // update data -> if exist break; else create
        // delete data
        SpecialtyWorkshop::where('workshop_id', $id)->delete();
        FacilityWorkshop::where('workshop_id', $id)->delete();
        CarBrandWorkshop::where('workshop_id', $id)->delete();
        Workhour::where('workshop_id', $id)->delete();

        // create
        foreach ($req2->specialty as $s) {
            SpecialtyWorkshop::create([
                'workshop_id' => $id,
                'specialty_id' => $s
            ]);
        }

        foreach ($req2->facility as $f) {
            FacilityWorkshop::create([
                'workshop_id' => $id,
                'facility_id' => $f
            ]);
        }

        foreach ($req2->car_brand as $cb) {
            CarBrandWorkshop::create([
                'workshop_id' => $id,
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
                'workshop_id' => $id,
                'day_id' => $day_id,
                'working_hour' => $w
            ]);
        }

        $service = Service::select('*')->whereIn('specialty_id', $req2->specialty)->get();
        // $workshop_id = $id;
        $specialty = $req2->specialty;

        return view('ubah-bengkel-harga', compact('workshop', 'service', 'specialty'), ['title' => 'Ubah Bengkel']);
    }

    public function updatePrice($id)
    {
        $workshop = Workshop::find($id);
        return view('', compact('workshop'), ['title' => 'Ubah Bengkel']);
    }

    public function updateWorkshopPrice(Request $req3, $id)
    {
        // return $req3;
        $workshop_id = $req3->workshop_id;
        $serviceInput = $req3->service_id;
        $Fprice = $req3->price;
        $index = 0;
        foreach ($req3->price as $price) {
            if ($price === null) {
                $Fprice[$index] = '0';
            }
            $index++;
        }
        // return $workshop_id;
        // update data -> if exist break; else create
        // delete data
        WorkshopPrice::where('workshop_id', $id)->delete();

        array_map(function($serviceInput, $Fprice, $workshop_id) {
            WorkshopPrice::create([
                'workshop_id' => $workshop_id,
                'service_id' => $serviceInput,
                'price' => $Fprice
             ]);

        }, $serviceInput, $Fprice, $workshop_id);

        Workshop::where('id', $workshop_id)->update([
            'is_active' => '1'
        ]);

        return redirect('/bengkel')->with('message', 'Bengkel berhasil diubah!');
    }





}
