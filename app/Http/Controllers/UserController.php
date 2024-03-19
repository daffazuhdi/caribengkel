<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\RegisterRequest;
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

    public function update(Request $u)
    {
        if($u->phone_number == Auth::user()->phone_number) {
            $rules = [
                'first_name' => 'required|string|max:155',
                'last_name' => 'required|string|max:155',
                // 'email' => 'required|email|unique:App\Models\User,email|min:8|max:50',
                'phone_number' => 'regex:/(08)[0-9]/|max:13',
                // 'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
                'photo' => 'mimes:jpg,png,jpeg,svg'
            ];
        }
        else {
            $rules = [
                'first_name' => 'required|string|max:155',
                'last_name' => 'required|string|max:155',
                // 'email' => 'required|email|unique:App\Models\User,email|min:8|max:50',
                'phone_number' => 'unique:App\Models\User,phone_number|regex:/(08)[0-9]/|max:13',
                // 'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
                'photo' => 'mimes:jpg,png,jpeg,svg'
            ];
        }

        $validator = Validator::make($u->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $id = Auth::user()->id;

        if($u->photo <> null)
        {
            $file = $u->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'user_'.$id.'_profile_'.$u->idtime().'.'.$extension;

            Storage::putFileAs('public/profiles', $file, $fileName);

            User::where('id', $id)->update([
                'first_name' => $u->first_name,
                'last_name' => $u->last_name,
                // 'email' => $u->email,
                'phone_number' => $u->phone_number,
                'photo' => $fileName
            ]);
        }
        else {
            User::where('id', $id)->update([
                'first_name' => $u->first_name,
                'last_name' => $u->last_name,
                // 'email' => $u->email,
                'phone_number' => $u->phone_number
            ]);
        }

        return redirect('/profil');
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
