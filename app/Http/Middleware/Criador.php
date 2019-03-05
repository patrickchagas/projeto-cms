<?php

namespace App\Http\Middleware;

use Closure;

class Criador
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
        if(auth()->user()->nivel == 'Criador'){
            return $next($request);
        }

        return redirect('criador')->with('error','You have not criador access');
    }

}
