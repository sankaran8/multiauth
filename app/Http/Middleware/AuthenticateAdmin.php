<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateAdmin
{
   public function handle($request, Closure $next)
   {
       //If request does not comes from logged in admin
       //then he/she shall be redirected to Login page
       if (! Auth::guard('admin')->check()) {
           return redirect('/admin');
       }

       return $next($request);
   }
}