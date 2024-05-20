<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // $route = Route::currentRouteName();
        $route = str_replace(url('/'), '', url()->previous());

        // return $route;

        if (! $request->expectsJson()) {
            // session()->flash('message', $route);
            session()->flash('message', 'Silakan masuk ke akun terlebih dahulu.');
            return route('home');
        }
    }
}
