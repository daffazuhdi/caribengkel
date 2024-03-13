<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Specialty;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;

class BengkelDetailController extends Controller
{
    //
    public function test($id){
        $workshop = Workshop::find($id);
        $rating = DB::table('ratings')->where('workshop_id', $id)->avg('rate');
        $countUlasan = DB::table('ratings')->where('workshop_id', $id)->count('rate');
        $spesialisasiRate = DB::table('ratings')->select('*',DB::raw('AVG(rate) as avgrate'))
                            ->where('workshop_id', $id)
                            ->groupBy('specialty_id')
                            ->get();
        return view('bengkelDetail', ['workshop' => $workshop,'title' => "Bengkel", 'rate' => $rating, 'countUlasan' => $countUlasan, 'spesialisasiRate' =>  $spesialisasiRate]);
    }

}
