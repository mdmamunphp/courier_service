<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        // $res= $request->url();
        // echo $res;
        // die();
    $user_id=session('sess_id');

        if(!isset($user_id)){

            return redirect("login_page");

        }
        //dd('hit');
        return $next($request);
    }
}
