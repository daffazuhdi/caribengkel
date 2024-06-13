<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Specialty;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class BengkelDetailController extends Controller
{
    //
    public function test($id){
        $workshop = Workshop::findOrFail($id);
        $rating = DB::table('reviews')->where('workshop_id', $id)->avg('rating');
        $ratingDetail = Review::select('*')->where('workshop_id', $id)->limit('3')->get();
        $countUlasan = DB::table('reviews')->where('workshop_id', $id)->count('rating');
        $spesialisasiRate = DB::table('reviews')->select('*',DB::raw('AVG(rating) as avgrate'))
                            ->where('workshop_id', $id)
                            ->groupBy('specialty_id')
                            ->get();
        $countCB = DB::table('car_brand_workshop')->where('workshop_id', $id)->count('workshop_id');
        $countFac = DB::table('facility_workshop')->where('workshop_id', $id)->count('workshop_id');
        // return $countFac;
        return view('bengkelDetail', ['workshop' => $workshop,'title' => "Bengkel", 'rate' => $rating, 'countUlasan' => $countUlasan, 'spesialisasiRate' =>  $spesialisasiRate, 'ratingDetail' => $ratingDetail, 'countCB' => $countCB, 'countFac' => $countFac]);
    }

}
