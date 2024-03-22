<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vehicle\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\CarUser;
use App\Models\CarService;
use Auth;

class VehicleController extends Controller
{
    //
    public function show() {
        $brands = CarBrand::all();
        return view('vehicle', compact('brands'));
    }

    public function showToAdd() {
        $brands = CarBrand::all();
        return view('tambah-kendaraan', compact('brands'), ['title' => "Tambah Kendaraan"]);
    }

    public function view($id) {
        $car = Car::find($id);
        $car_model = CarModel::all();
        $car_brand = CarBrand::all();

        return view('ubah-kendaraan', compact('car', 'car_model', 'car_brand'), ['title' => "Ubah Kendaraan"]);
    }

    public function store(StoreRequest $request) {
        // Validate Input
        // Insert Car
        // Insert Car Service
        // Insert Car User
        // Redirect

        $validated = $request->validated();

        $car = [
            "car_model_id" => $validated['car_model_id'],
            "license_plate" => $validated['license_plate'],
        ];

        $new_car = Car::create($car);

        $car_service = [
            "car_id" => $new_car->id,
            "service_date" => $validated['service_date'],
        ];

        $new_car_service = CarService::create($car_service);

        $car_user = [
            "car_id" => $new_car->id,
            "user_id" => Auth::user()->id,
        ];

        $new_car_user = CarUser::create($car_user);

        return redirect()->route('home');
    }

    public function update(Request $request, $id) {
        // Validate Input
        // Insert Car Service
        // Redirect
        $car = Car::find($id);

        $rules = [
            // 'car_model_id' => 'required',
            // 'license_plate' => 'required',
            'service_date' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $date = date( 'Y-m-d H:i:s', strtotime( $request->input('service_date') ) );

        $car_service = new CarService();

        $car_service->car_id = $car->id;
        $car_service->service_date = $date;

        $car_service->save();

        return redirect('/profil');
    }

    public function getModels($id) {
        $models = CarModel::where('car_brand_id', $id)->get();
        return response()->json($models, 200);
    }
}
