<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rating;

class UserController extends Controller
{
    public function viewProfile()
    {
        $user = User::find(1);
        $rating = Rating::where('user_id', '=', $user->id)->get();

        return view('profile', compact('user', 'rating'), ["title" => "Profile"]);
    }
}
