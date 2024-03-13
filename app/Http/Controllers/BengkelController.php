<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use Illuminate\Support\Facades\DB;

class BengkelController extends Controller
{
    public function showAll(Request $req)
    {
        $search = $req->search;

        $workshop = Workshop::select()
                ->withAvg('ratings', 'rate')->where('name', 'LIKE', "%$search%")
                ->get();
        // $workshops = Workshop::paginate(16);
        // $rating = DB::table('ratings')->where('workshop_id', $id)->avg('rate');
        return view('bengkel', ['search' => $search, 'workshop' => $workshop], ['title' => "Bengkel"]);
    }
}
