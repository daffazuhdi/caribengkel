<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Specialty;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class WriteReviewController extends Controller
{
    //
    public function showReview($id){
        $workshop = Workshop::findOrFail($id);
        $rating = DB::table('reviews')->where('workshop_id', $id)->avg('rating');
        $ratingDetail = Review::select('*')->where('workshop_id', $id)->paginate(15);
        $countUlasan = DB::table('reviews')->where('workshop_id', $id)->count('rating');
        $spesialisasiRate = DB::table('reviews')->select('*',DB::raw('AVG(rating) as avgrate'))
                            ->where('workshop_id', $id)
                            ->groupBy('specialty_id')
                            ->get();
        return view('writeReview', ['workshop' => $workshop,'title' => "Bengkel", 'rate' => $rating, 'countUlasan' => $countUlasan, 'spesialisasiRate' =>  $spesialisasiRate, 'ratingDetail' => $ratingDetail]);
    }

    public function writeReview($id, Request $req){
        // return $req;
        $user_id = auth()->user()->id;
        $workshop_id = $id;
        $rate = $req->rating;
        $comment = $req->comment;

        $rules = [
            'rating' => 'required',
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
            // ->with(['message' => 'Isi nilai rating dibawah ini.']);
            // ->withErrors($validator);
        }

        if ($req->specialty != 'null') {
            $specialty = Specialty::where('name', $req->specialty)->first();

            if ($comment != null) {
                DB::table('reviews')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => $specialty->id,
                    'rating' => $rate,
                    'comment' => $comment,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            else {
                DB::table('reviews')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => $specialty->id,
                    'rating' => $rate,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
        else{
            if ($comment != null) {
                DB::table('reviews')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => 0,
                    'rating' => $rate,
                    'comment' => $comment,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            else {
                DB::table('reviews')->insert([
                    'user_id' => $user_id,
                    'workshop_id' => $id,
                    'specialty_id' => 0,
                    'rating' => $rate,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }


        // $workshop = Workshop::find($id);
        // $rating = DB::table('ratings')->where('workshop_id', $id)->avg('rate');
        // $ratingDetail = Rating::select('*')->where('workshop_id', $id)->paginate(15);
        // $countUlasan = DB::table('ratings')->where('workshop_id', $id)->count('rate');
        // $spesialisasiRate = DB::table('ratings')->select('*',DB::raw('AVG(rate) as avgrate'))
        //                     ->where('workshop_id', $id)
        //                     ->groupBy('specialty_id')
        //                     ->get();

        return redirect()->to('ulasan/'.$id)->with(['id'=>$id,'message' => 'Ulasan berhasil ditambahkan!']);
    }
}
