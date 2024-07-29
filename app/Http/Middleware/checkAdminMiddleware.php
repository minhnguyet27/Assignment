<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } else {
                // redirect to login page with error message
            }
        } else {
            return redirect()->route('admin.getLogin')->with([
                'error'=> 'You are not admin',
            ]);
        }
        // return $next($request);

    }

}