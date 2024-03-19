<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Subdistrict;
use App\Models\Specialty;
use App\Models\CarBrand;
use Illuminate\Support\Facades\DB;

class BengkelController extends Controller
{
    public function showAll(Request $req)
    {
        // dd($req->specialty);
        $search = $req->search;
        $subdistrict = $req->subdistrict;

        $query = Workshop::select()
                // ->join('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
                ->withAvg('ratings', 'rate')->where('name', 'LIKE', "%$search%")
                // ->where('subdistrict_id', $req->subdistrict)
                // ->where('specialty_id', $req->specialty)
                ->paginate(16);
        // dd($query->all());

        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $brand = CarBrand::all();

        if(isset($req->subdistrict) && ($req->subdistrict != null)){
            $query = $query->where('subdistrict_id', $req->subdistrict);
        }

        if(isset($req->specialty) && ($req->specialty != null)){
            $query = $query->join('specialty_workshop', 'specialty_workshop.workshop_id', '=', 'workshops.id')
                    ->where('subdistrict_id', $req->subdistrict);
        }

        // if (isset($request->brand) && ($request->brand != null)){
        //     $query->where('name', $request->brand);
        // }

        $workshop = $query;

        // dd($query);
        // dd($workshop->all());
        // return $workshop;

        return view('bengkel', compact('search', 'workshop', 'subdistrict', 'specialty', 'brand'),
                    ['title' => "Bengkel"]
        );
    }

    // public function filter($filter)
    // {
    //     $workshop = ;

    //     return view('bengkel');
    // }
}
