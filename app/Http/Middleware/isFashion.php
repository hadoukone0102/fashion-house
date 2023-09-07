<?php

namespace App\Http\Middleware;

use App\Models\Fashion;
use App\Models\produits;
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

        if(auth()->check()){
            $user_conn = auth()->user()->email;
            $select_user_conn = Fashion::where('email',$user_conn)->first();
            $mes_produits_publier = produits::where('iduser', $user_conn)->paginate(3);
            // Passer la variable $my_prod à la vue
            view()->share('my_prod', $mes_produits_publier);
            if($select_user_conn){
                return $next($request);
            }else{
                return redirect('/');
            }
        }else{
            $user_conn= null;
            return redirect('/login');
        }
        
       
        // $user_conn = auth()->user()->email;
        
        // if($select_user_conn){
        //     return redirect('/index');
        // }else{
        //     return redirect('/');
        // }
       
    }
}
