<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Veuillez vous connecter.');
        }

        if (Auth::user()->email !== 'agence.yanatravel@gmail.com') {
            abort(403, 'Accès non autorisé. Vous n\'êtes pas administrateur.');
        }

        return $next($request);
    }
}