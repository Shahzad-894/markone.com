<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;

class adminCheck
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
         if($request->session()->get('admin_email')){
            return $next($request);
        }
        else{
            Session::flash('msg','You Need to Login First');
            //  response()->view('loginuser',['msg'=>'You Need to Login First']);
            return redirect('/adminlogin');
        }
    }
}
