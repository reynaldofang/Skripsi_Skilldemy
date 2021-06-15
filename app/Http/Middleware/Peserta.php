<?php

namespace App\Http\Middleware;

use Closure;

class Peserta
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isEmp == 0){
            return $next($request);
            }
            return redirect('/peserta')->with('Error', "You Are not the Peserta!");
    }
}
