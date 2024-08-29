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

    public function view($id){
        $workshop = Workshop::findOrFail($id);
        // $rating = DB::table('reviews')->where('workshop_id', $id)->avg('rating');
        $rating = Review::select('reviews.user_id', 'reviews.workshop_id', 'reviews.specialty_id', 'reviews.rating', 'reviews.comment', 'reviews.created_at')
                    ->leftJoin('workshops', 'reviews.workshop_id', '=', 'workshops.id')
                    ->leftJoin('specialties', 'reviews.specialty_id', '=', 'specialties.id')
                    ->where('reviews.workshop_id', $id)
                    // ->whereIn('reviews.specialty_id', function ($query) {
                    //     $query->select('specialty_workshop.specialty_id')
                    //         ->from('workshops')
                    //         ->leftJoin('specialty_workshop', 'workshops.id', '=', 'specialty_workshop.workshop_id');
                    // })
                    ->avg('rating');
                // ->orderBy('reviews.workshop_id')
                // ->get();
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
        $workshop = Workshop::findOrFail($id);
        // $rating = DB::table('reviews')->where('workshop_id', $id)->avg('rating');
        $rating = Review::select('reviews.user_id', 'reviews.workshop_id', 'reviews.specialty_id', 'reviews.rating', 'reviews.comment', 'reviews.created_at')
                    ->leftJoin('workshops', 'reviews.workshop_id', '=', 'workshops.id')
                    ->leftJoin('specialties', 'reviews.specialty_id', '=', 'specialties.id')
                    ->where('reviews.workshop_id', $id)
                    ->whereIn('reviews.specialty_id', function ($query) {
                        $query->select('specialty_workshop.specialty_id')
                            ->from('workshops')
                            ->leftJoin('specialty_workshop', 'workshops.id', '=', 'specialty_workshop.workshop_id');
                    })
                    ->avg('rating');
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

