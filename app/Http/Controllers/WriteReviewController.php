<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Specialty;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class WriteReviewController extends Controller
{
    //
    public function showReview($id){
        $workshop = Workshop::find($id);
        $rating = DB::table('ratings')->where('workshop_id', $id)->avg('rate');
        $ratingDetail = Rating::select('*')->where('workshop_id', $id)->paginate(15);
        $countUlasan = DB::table('ratings')->where('workshop_id', $id)->count('rate');
        $spesialisasiRate = DB::table('ratings')->select('*',DB::raw('AVG(rate) as avgrate'))
                            ->where('workshop_id', $id)
                            ->groupBy('specialty_id')
                            ->get();
        return view('writeReview', ['workshop' => $workshop,'title' => "Bengkel", 'rate' => $rating, 'countUlasan' => $countUlasan, 'spesialisasiRate' =>  $spesialisasiRate, 'ratingDetail' => $ratingDetail]);
    }

    public function writeReview($id, Request $req){
        // return $req;
        $user_id = auth()->user()->id;
        $workshop_id = $id;
        $rate = $req->rate;
        $comment = $req->comment;

        if ($req->specialty != 'null') {
            $specialty = Specialty::where('name', $req->specialty)->first();

            if ($comment != null) {
                DB::table('ratings')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => $specialty->id,
                    'rate' => $rate,
                    'comment' => $comment,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            else {
                DB::table('ratings')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => $specialty->id,
                    'rate' => $rate,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
        else{
            if ($comment != null) {
                DB::table('ratings')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => 0,
                    'rate' => $rate,
                    'comment' => $comment,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            else {
                DB::table('ratings')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => 0,
                    'rate' => $rate,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }


        $workshop = Workshop::find($id);
        $rating = DB::table('ratings')->where('workshop_id', $id)->avg('rate');
        $ratingDetail = Rating::select('*')->where('workshop_id', $id)->paginate(15);
        $countUlasan = DB::table('ratings')->where('workshop_id', $id)->count('rate');
        $spesialisasiRate = DB::table('ratings')->select('*',DB::raw('AVG(rate) as avgrate'))
                            ->where('workshop_id', $id)
                            ->groupBy('specialty_id')
                            ->get();

        return view('review', ['workshop' => $workshop,'title' => "Bengkel", 'rate' => $rating, 'countUlasan' => $countUlasan, 'spesialisasiRate' =>  $spesialisasiRate, 'ratingDetail' => $ratingDetail]);
    }
}
