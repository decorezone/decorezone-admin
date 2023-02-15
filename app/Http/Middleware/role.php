<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        

        if (!Auth::check())
            return redirect('/');


        $user_id=Auth::user()->id;

        if(!User::hasRole($user_id,$role)){
            return redirect()->back();                        
        }

        return $next($request);


        return redirect('/');
    }
}
