<?php

namespace App\Http\Middleware;

use App\Models\Fashion;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isFashion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   

        $user_conn = auth()->user()->email;
        $select_user_conn = Fashion::where('email',$user_conn)->first();
        if($select_user_conn){
            return $next($request);
        }else{
            return redirect('/');
        }
        // $user_conn = auth()->user()->email;
        
        // if($select_user_conn){
        //     return redirect('/index');
        // }else{
        //     return redirect('/');
        // }
       
    }
}
