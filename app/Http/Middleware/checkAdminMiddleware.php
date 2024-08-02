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
                return redirect()->route('admin.getLogin'); // redirect to client index page if not admin  // or redirect to any other page you want to redirect to when not admin.  // You can also return a response object with a 403 status code.  // For example: return response('Unauthorized', 403);  // or return response()->json(['error' => 'Unauthorized'], 403);  // or return redirect()->back()->withErrors(['error'
                
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