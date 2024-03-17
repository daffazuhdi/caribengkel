<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rating;
use App\Models\CarModel;
use App\Models\CarBrand;
use App\Models\Car;

class UserController extends Controller
{
    public function viewProfile()
    {
        $rating = Rating::where('user_id', '=', Auth::user()->id)->get();
        // $service_date = date($rating->service_date);
        $car_model = CarModel::all();
        $car_brand = CarBrand::all();

        return view('profil', compact('rating', 'car_model', 'car_brand'), ["title" => "Profil"]);
    }

    public function editProfile()
    {
        return view('ubah-profil', ["title" => "Ubah Profil"]);
    }

    public function viewCar($id) {
        $car = Car::find($id);
        // $rating = Rating::where('user_id', '=', $user->id)->get();
        $car_model = CarModel::all();
        $car_brand = CarBrand::all();

        return view('profile-car', compact('car', 'car_model', 'car_brand'), ['title' => "Ubah Kendaraan"]);
    }

    public function logout(){
        Auth::logout();
        // request()->session()->invalidate();
        // request()->session()->regenerateToken();
        return redirect('/');
    }
}
