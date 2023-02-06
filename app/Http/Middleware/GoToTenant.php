<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GoToTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (auth()->user()) {

            $tenant= GetLoginTenant();
            tenancy()->initialize($tenant);


            return $next($request);
        }
        return response()->json('Your need to login');



    }
}
