<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show () {
        return view('login');
    }

    public function submit (LoginRequest $request) {
        $credentials = $request->validated();

        if(Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()->withInput()->withErrors(['credentials' => 'Email atau kata sandi salah.']);
    }
}
