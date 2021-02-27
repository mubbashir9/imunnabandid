<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Redirect;

class Manufacture
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
        
   
        $value = $request->session()->get('email');
        
        
        if($value != null){
            
            //  $user = User::where('email',$value)->where('role',0)->get()->toArray();
             return $next($request);
        }else{
            
            return redirect('/manufacture/login');
            
        }
            
  
            
        }
  
      
         
         
        
    
}
