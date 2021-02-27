<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\User;
use App\Customer;
use Image;
use Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Manufacturecontroller extends Controller
{
    public $value;
    public $name;
    
    
    public function show()
    {
    
        return view('admin.login');
       
      }
      
       public function showdashboard()
    {
        //  $username =$name;
        return view('admin.dashboard.dashboard');
       
      }
      
        public function logout(request $request)
    {
        $request->session()->forget('email');

        return redirect('/admin/login');
       
      }
      
          public function menuqc()
    {
        

        return view('admin.dashboard.menuqc');
       
      }
      
             public function completedorders()
    {
        

        return view('admin.dashboard.completedorders');
       
      }
      
                public function users()
    {
        

        return view('admin.dashboard.users');
       
      }
      
       public function neworder()
    {
        
        $orderslist = Customer::all(); 
        return view('admin.dashboard.neworder')->with('orders',$orderslist);
       
      }
      
      
       public function login(Request $request)
    {
        
        
        $request_email = $request->email;
        $request_password = $request->password;
    
        
         $admin = User::where('email', $request_email)->where('role',0)->first();
         

          if($admin != null){
               $email = $admin->email;
               $name = $admin->name;
          $password = $admin->password;
          $role = $admin->role; 
              
               if($request_email == $email && $role == 0){
               if(Hash::check($request_password, $password)){
                  $name = session()->put('name', $name );
                $value = session()->put('email', $request_email );
             
                   return redirect('/admin/dashboard');
               }
               else{
                return Redirect::back()->withErrors(['Please enter the correct password', 'The Message']);
               }
               
           }else{
                 return Redirect::back()->withErrors(['Please enter the correct info', 'The Message']);
           }
              
          }else{
               return Redirect::back()->withErrors(['Please enter the correct email', 'The Message']);
          }
          
      
       
      }
      
}
