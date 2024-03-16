<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rating;
use App\Models\CarModel;
use App\Models\CarBrand;

class UserController extends Controller
{
    public function viewProfile($id)
    {
        $user = User::find($id);
        $rating = Rating::where('user_id', '=', $user->id)->get();
        $car_model = CarModel::all();
        $car_brand = CarBrand::all();

        return view('profile', compact('user', 'rating', 'car_model', 'car_brand'), ["title" => "Profile"]);
    }
}
