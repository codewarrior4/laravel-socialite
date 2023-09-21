<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session('admin') == '')
        {
            return redirect('admin/login')->with('error','Admin not logged  in');
        }
        // check if already logged in
        if(session('admin') <> "" && $request->path()=='admin/login' )
        {
            session()->flash('success','Admin already Signed in');
            return redirect('admin');
        }

        return $next($request);
    }
}
