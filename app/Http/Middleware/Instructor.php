<?php

namespace App\Http\Middleware;

use Closure;

class Instructor
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
            return redirect('/instructor')->with('Error', "You Are not the Instructor!");
    }
}
