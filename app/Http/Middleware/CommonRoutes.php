<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonRoutes
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
        if(Auth::user()->utype === 'ADM' || Auth::user()->utype === 'USR' || Auth::user()->utype === 'PROC' || Auth::user()->utype === 'FIN' || Auth::user()->utype === 'HRM' || Auth::user()->utype === 'TRN' )
        {
            return $next($request);
        }
        else
        {
            session()->flush();
            return redirect()->route('login');
        }
    }
}
