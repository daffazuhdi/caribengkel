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
        $search = $req->search;

        $workshop = Workshop::select()
                ->withAvg('ratings', 'rate')->where('name', 'LIKE', "%$search%")
                ->paginate(16);

        $subdistrict = Subdistrict::all();
        $specialty = Specialty::all();
        $brand = CarBrand::all();

        return view('bengkel', compact('search', 'workshop', 'subdistrict', 'specialty', 'brand'),
                    ['title' => "Bengkel"]
        );
    }
}
