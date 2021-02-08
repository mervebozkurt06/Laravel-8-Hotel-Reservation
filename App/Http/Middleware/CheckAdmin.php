<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $userRoles = Auth::user()->roles->pluck('name'); //giriş yapan kişinin rolünü al array döndürür
        //dd($userRoles);
        If(!$userRoles->contains('admin')){ //adminse admin logine gönder
            return redirect(route('admin_login'))->with('error','You do not have permission!');
        }
        return $next($request);
    }
}
