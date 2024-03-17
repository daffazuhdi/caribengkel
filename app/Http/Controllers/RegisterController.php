<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class RegisterController extends Controller
{
    //
    public function show () {
        return view('register');
    }

    public function submit(RegisterRequest $request) {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['photo'] = "-";
        $validated['is_active'] = 1;
        $validated['role_id'] = 2;

        $create = User::create($validated);
        if($create) {
            // harus ada ini supaya bisa nyimpen data user, dan web jadi tau user ini yg punya kendaraan ini
            Auth::login($create);
            return redirect()->route('vehicle.show');
        }

        return abort(500);
    }
}
