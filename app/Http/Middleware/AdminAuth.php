<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            
            return redirect()->route('admin.login')->withErrors(['error' => 'You must log in first.']);
        }

        return $next($request);
    }
}


