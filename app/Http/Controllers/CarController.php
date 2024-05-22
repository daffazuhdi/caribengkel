<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vehicle\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\CarUser;
use App\Models\CarService;
use Auth;
use Carbon\Carbon;

class CarController extends Controller
{
    //
    public function car(){
        $sixMonth = Carbon::now()->subMonths(1);

        $query = Car::select('cars.id', 'users.first_name','users.phone_number')
                ->withMax('car_services','service_date')
                ->leftjoin('car_user', 'car_user.car_id', '=', 'cars.id')
                ->leftjoin('users', 'users.id', '=', 'car_user.user_id')
                ->groupBy('cars.id')
                ->get();

        // $query2 = $query->toQuery()->where('car_services_max_service_date', '<', $sixMonth)->get();

        // $data = $query->phone_number;

        $data = DB::table('car_services')->where('service_date', '<', $sixMonth)->groupBy('car_id')->get();

        $query2 = CarService::select('car_services.car_id', 'users.first_name','users.phone_number', 'car_services.service_date')
                  ->leftjoin('car_user', 'car_user.car_id', '=', 'car_services.car_id')
                  ->leftjoin('users', 'users.id', '=', 'car_user.user_id')
                  ->where('car_services.service_date', '<', $sixMonth)->groupBy('car_id')->get(['car_id', DB::raw('MAX(service_date) as service_date')]);


        dd($query2);
    }

    public function show() {
        $brands = CarBrand::all();
        return view('vehicle', compact('brands'));
    }

    public function showToAdd() {
        $brands = CarBrand::all();
        return view('tambah-kendaraan', compact('brands'), ['title' => "Tambah Kendaraan"]);
    }

    public function view($id) {
        // return CarService::index($id);
        $car = Car::find($id);
        $car_model = CarModel::all();
        $car_brand = CarBrand::all();
        $services = CarService::index($id);
        $no = 1;

        return view('ubah-kendaraan', compact('car', 'car_model', 'car_brand', 'services', 'no'), ['title' => "Ubah Kendaraan"]);
    }

    public function store(StoreRequest $request) {
        // Validate Input
        // Insert Car
        // Insert Car Service
        // Insert Car User
        // Redirect

        // return $request;

        $is_notified = $request->is_notify;

        $validated = $request->validated();

        $car = [
            "car_model_id" => $validated['car_model'],
            "license_plate" => $validated['license_plate'],
        ];

        $new_car = Car::create($car);

        $service_date = Carbon::createFromFormat('d/m/Y', $validated['service_date'])->format('Y-m-d');
        if ($is_notified == 1) {
            $car_service = [
                "car_id" => $new_car->id,
                "service_date" => $service_date,
                "is_notified" => 0
            ];
        }
        else{
            $car_service = [
                "car_id" => $new_car->id,
                "service_date" => $service_date,
                "is_notified" => 1
            ];
        }

        $new_car_service = CarService::create($car_service);

        $car_user = [
            "car_id" => $new_car->id,
            "user_id" => Auth::user()->id,
        ];

        $new_car_user = CarUser::create($car_user);

        $route = Route::currentRouteName();

        if($route == 'vehicle.store') {
            return redirect()->route('home');
        }
        else {
            return redirect()->route('profile.view')->with('message', 'Kendaraan berhasil ditambahkan!');
        }
    }

    public function update(Request $request, $id) {
        // Validate Input
        // Insert Car Service
        // Redirect

        // return $request;

        $car = Car::find($id);
        $lastDate = $car->car_services->max('service_date');
        $last = date('d/m/Y', strtotime($lastDate));

        // return $last; #$request->service_date;
        $rules = [
            // 'car_model_id' => 'required',
            // 'license_plate' => 'required',
            'service_date' => 'required|date_format:d/m/Y|after:'.$last
        ];

        // return $request->service_date;

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // $date = date( 'Y-m-d H:i:s', strtotime( $request->input('service_date') ) );
        $date = Carbon::createFromFormat('d/m/Y', $request->input('service_date'))->format('Y-m-d');

        $car_service = new CarService();

        $car_service->car_id = $car->id;
        $car_service->service_date = $date;

        $is_notify = $request->is_notify;
        if ($is_notify == 1) {
            $car_service->is_notified = 0;
        }
        else{
            $car_service->is_notified = 1;
        }

        CarService::where('car_id', $id)->update([
            'is_notified' => 1
        ]);

        $car_service->save();

        return redirect('/profil')->with('message', 'Kendaraan berhasil diperbarui!');
    }

    public function delete($id) {
        // return $id;
        Car::deleteCar($id);
        CarUser::deleteCar($id);
        CarService::deleteCar($id);

        return redirect('/profil')->with('message', 'Kendaraan berhasil dihapus!');
    }

    public function getModels($id) {
        $models = CarModel::where('car_brand_id', $id)->get();
        return response()->json($models, 200);
    }
}
