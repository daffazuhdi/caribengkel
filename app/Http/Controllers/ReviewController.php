<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Specialty;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    //

    public function test($id){
        $workshop = Workshop::find($id);
        $rating = DB::table('reviews')->where('workshop_id', $id)->avg('rating');
        $ratingDetail = Review::select('*')->where('workshop_id', $id)->paginate(15);
        $countUlasan = DB::table('reviews')->where('workshop_id', $id)->count('rating');
        $spesialisasiRate = DB::table('reviews')->select('*',DB::raw('AVG(rating) as avgrate'))
                            ->where('workshop_id', $id)
                            ->groupBy('specialty_id')
                            ->get();

        $begin = $ratingDetail->firstItem();
        $end = $ratingDetail->lastItem();
        $count = $ratingDetail->total();

        return view('review', ['workshop' => $workshop,'title' => "Bengkel", 'rate' => $rating, 'countUlasan' => $countUlasan, 'spesialisasiRate' =>  $spesialisasiRate, 'ratingDetail' => $ratingDetail, 'begin' => $begin, 'end' => $end, 'count' => $count]);
    }

    public function sort($id, $sort){
        $workshop = Workshop::find($id);
        $rating = DB::table('reviews')->where('workshop_id', $id)->avg('rating');
        $countUlasan = DB::table('reviews')->where('workshop_id', $id)->count('rating');
        $spesialisasiRate = DB::table('reviews')->select('*',DB::raw('AVG(rating) as avgrate'))
                            ->where('workshop_id', $id)
                            ->groupBy('specialty_id')
                            ->get();
       if ($sort == 'newest') {
        $ratingDetail = Review::select('*')->where('workshop_id', $id)->orderBy('created_at', 'DESC')->paginate(15);
       }
       else if ($sort == 'lowtohigh') {
        $ratingDetail = Review::select('*')->where('workshop_id', $id)->orderBy('rating', 'ASC')->paginate(15);
       }
       else if ($sort == 'hightolow') {
        $ratingDetail = Review::select('*')->where('workshop_id', $id)->orderBy('rating', 'DESC')->paginate(15);
       }
       else{
        $ratingDetail = Review::select('*')->where('workshop_id', $id)->paginate(15);
       }

       $begin = $ratingDetail->firstItem();
       $end = $ratingDetail->lastItem();
       $count = $ratingDetail->total();

       return view('review', ['workshop' => $workshop,'title' => "Bengkel", 'rate' => $rating, 'countUlasan' => $countUlasan, 'spesialisasiRate' =>  $spesialisasiRate, 'ratingDetail' => $ratingDetail, 'begin' => $begin, 'end' => $end, 'count' => $count]);
    }

}

