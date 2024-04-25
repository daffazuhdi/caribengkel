<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarService;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
}
