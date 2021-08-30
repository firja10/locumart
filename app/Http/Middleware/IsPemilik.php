<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPemilik
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);

        
        if(auth()->user()->is_admin == 2){
            return $next($request);
        }
   
        return redirect('home')->with('error',"Anda Belum Punya Akses Pemilik");


    }
}
