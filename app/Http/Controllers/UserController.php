<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Models\Review;
use App\Models\CarModel;
use App\Models\CarBrand;
use App\Models\Car;
use App\Models\Workshop;

class UserController extends Controller
{
    public function view()
    {
        $ratings = Review::select('reviews.*', 'specialties.name')
                ->leftjoin('workshops', 'workshops.id', '=', 'reviews.workshop_id')
                ->leftjoin('specialties', 'specialties.id', '=', 'reviews.specialty_id')
                ->where('reviews.user_id', '=', Auth::user()->id)
                ->where('workshops.is_active', '=', '1');

        // $workshops = Workshop::select()
        //         ->where('users.id', '=', Auth::user()->id);

        $query = Workshop::select('workshops.*','specialties.name AS specialty_name',
                                    'specialty_workshop.specialty_id', 'car_brand_workshop.car_brand_id',
                                    'subdistricts.name AS subdistrict_name')
                ->leftjoin('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
                ->leftjoin('car_brand_workshop', 'car_brand_workshop.workshop_id', '=', 'workshops.id')
                ->leftjoin('specialties', 'specialties.id', '=', 'specialty_workshop.specialty_id')
                ->leftjoin('subdistricts', 'subdistricts.id', '=', 'workshops.subdistrict_id')
                ->leftjoin('car_brands', 'car_brands.id', '=', 'car_brand_workshop.car_brand_id')
                ->withAvg('reviews', 'rating')
                ->where('workshops.is_active', '=', '1')->orderBy('reviews_avg_rating', 'DESC');
        $workshopsSA = $query->groupBy('workshops.id')->get();

        $workshops = $query->where('workshops.user_id', '=', Auth::user()->id)->groupBy('workshops.id')->get();



        // dd($workshopsSA);

        $count = $ratings->count();

        $ratings = $ratings->paginate(9);
        $begin = $ratings->firstItem();
        $end = $ratings->lastItem();

        // $service_date = date($rating->service_date);
        $car_model = CarModel::all();
        $car_brand = CarBrand::all();

        return view('profil', compact('ratings', 'car_model', 'car_brand', 'begin', 'end', 'count', 'workshops', 'workshopsSA'), ["title" => "Profil"]);
    }

    public function detail()
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

        if(is_null($u->photo) == false)
        {
            $file = $u->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'user_'.$id.'_profile_'.time().'.'.$extension;

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

        return redirect('/profil')->with('message', 'Profil berhasil diperbarui!');
    }

    public function logout()
    {
        Auth::logout();
        // request()->session()->invalidate();
        // request()->session()->regenerateToken();
        return redirect('/');
    }

    public function viewAllUser(){
        $users = User::all();
        return view('semua-user', compact('users'), ["title" => "Semua User"]);
    }
}
