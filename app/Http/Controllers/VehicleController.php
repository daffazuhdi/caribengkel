<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vehicle\StoreRequest;
use Illuminate\Http\Request;
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

    public function getModels($id) {
        $models = CarModel::where('car_brand_id', $id)->get();
        return response()->json($models, 200);
    }
}
