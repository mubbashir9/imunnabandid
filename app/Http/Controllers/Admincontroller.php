<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\User;

use App\Customer;
use App\Orderlink;
use App\Shippingdetail;
use Image;
use Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Admincontroller extends Controller
{
    public $value;
    public $name;
    
    public function methodName(Request $request)
    {
        $customers = Customer::find($request->input('status'));
        $idCount = count($customers);
        foreach ($customers as $key)
        {
            for ($i=0; $i < $idCount; $i++)
            {
                $update = Customer::where('id','=',$key->id)->update(['admin_status' => 1]);
            }
        }
        return response()->json($update, 200);
    }
    
    public function show()
    {
    
        return view('admin.login');
       
      }
      
       public function userregister(request $request)
      {
        //   dd($request);
          
           $user = request()->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|max:255|email',
            'password'=> 'required|max:255',
          
        ]);
        $password = Hash::make($request->password);
        $create = new User;
     $create->name = $request->name;
     $create->email = $request->email;
     $create->password = $password;
     $create->token = $request->_token;
     $create->save();
        // $create = new  = User::create($user);
        
        return redirect('/admin/dashboard/users');
       
      }
      
        public function customeredit(request $request,$id)
      {
        //   dd($request);
            $data = request()->validate([
            'firstname'=> 'required|max:255',
            'lastname'=> 'required|max:255',
            'date'=> 'required|max:255',
            'cart'=> 'required',
            'lotno'=> 'required|max:7',
            'first_pin'=> 'required|max:4',
            
        ]);
  
  if($request->hasFile('cart')){
          $origionalImage = $request->file('cart');
             $thumbnailImage = Image::make($origionalImage);
            $origionalname= time().$origionalImage->getClientOriginalName();
            $thumbnailPath = public_path('card_images/');
            $thumbnailImage->save($thumbnailPath.time().$origionalImage->getClientOriginalName());
          
        //   $customer_order = Customer::where('id','=',$request->id)->get()->toArray();
        //  dd($customer_order[0]);
        //   $customer_rh = Shippingdetail::create($customer_order[0]);
          
           $orderNumber = Crypt::encrypt($request->orderno);
            $product = Crypt::encrypt($request->product);
            $firstname = Crypt::encrypt($request->firstname);
            $lastname = Crypt::encrypt($request->lastname);
            $email = Crypt::encrypt($request->email);
            $country = Crypt::encrypt($request->country);
            $vaccine = Crypt::encrypt($request->vaccine);
            $date = Crypt::encrypt($request->date);
             $Origionalname = Crypt::encrypt($origionalname);
            $lotno = Crypt::encrypt($request->lotno);
            $first_pin = Crypt::encrypt($request->first_pin);
            $current_pin = Crypt::encrypt($request->first_pin);
            $city = Crypt::encrypt($request->city);
            $street = Crypt::encrypt($request->shippinginformation);
          
          $update_customer_rec =Customer::where('id','=',$id)->update([
              
              'QC_approve'=> 0,
              'qc_image'=> 0,
              'admin_status'=> 1,
              'in_manu'=> 0,
              'admin_reject'=> 0,
              'reset_order'=> 0,
              'band_image'=> null,
              'completed'=> 0,
              'orderNumber'=> $orderNumber,
              'product'=> $product,
              'firstname'=> $lastname,
              'lastname'=> $lastname,
              'email'=> $email,
              'on_ln'=> 1111,
              'linkno'=> $lotno,
              'shippinginformation'=> $street,
              'finalVaccinationDate'=> $date,
              'vaccine'=> $vaccine,
              'image'=> $Origionalname,
              'lotno'=> $lotno,
              'first_pin'=> $first_pin,
              'current_pin'=> $first_pin,
              'country'=> $country,
              'city'=> $city,

              ]); 
          
          
        
        return redirect('/admin/dashboard/neworder');
  }
       
      }
      
      
       public function showdashboard()
    {
        //  $username =$name;
        return view('admin.dashboard.neworder');
       
      }
      
      
      
        public function logout(request $request)
    {
        $request->session()->forget('email');

        return redirect('/admin/login');
       
      }
      
          public function menuqc()
    {
        
        $qcimagelist = Customer::where('qc_image', '=' ,1)->orderBy('id', 'DESC')->paginate(25);

        return view('admin.dashboard.menuqc')->with('qclist',$qcimagelist);
       
      }
      
      
           public function orderlinks()
    {
        
        $qcimagelist = Orderlink::orderBy('id', 'DESC')->where('reset_order', '!=', 1)->paginate(25);

        return view('admin.dashboard.orderlinks')->with('qclist',$qcimagelist);
       
      }
      
              public function resetlink($id)
    {
        $order_detail = Orderlink::find($id);
     
        $qcimagelist = Orderlink::where('id','=',$id)->update(['status'=> 0 , 'reset_order'=> 1]);
        $qcimagelist = Customer::where('linkno','=',$order_detail->linkno)->update(['reset_order'=> 1]);

        return redirect('/admin/dashboard/order-links');
       
      }
      
      
      
         public function QCapprove($id)
    {
        $qcimageapprove = Customer::where('id', '=' ,$id)->update(['QC_approve' => 1,'qc_image' => 2]);

        return redirect('/admin/dashboard/menu-qc');
       
      }
      
      
             public function completedorders()
    {
        
        $completed_orders = Customer::where('completed' ,'=','1')->orderBy('id', 'DESC')->paginate(25);
        

        return view('admin.dashboard.completedorders')->with('comorders',$completed_orders);
       
      }
      
      
      
                public function QCreject($id)
    {
        
        
        $completed_orders = Customer::where('id' ,'=', $id)->update(['qc_image' => 0]);
        

        return redirect('/admin/dashboard/neworder');
       
      }
      
      
      
               public function userform()
    {
        

        return view('admin.dashboard.users');
       
      }
      
                public function delete($id)
    {
            $delete = User::where('id','=',$id)->update(['status'=>1]);
            
        return redirect('/admin/dashboard/users');
       
      }
      
          public function users()
        {
        
         $users = User::where('role' ,'=', 1)->where('status' ,'=', 0)->orderBy('id', 'DESC')->paginate(25);
         
        //  dd($users);
        return view('admin.dashboard.userslist')->with('users',$users);
       
       }
      
       public function neworder()
    {
     
        $orderslist = Customer::where('admin_reject', '!=' , 1)->where('reset_order', '=' , 0)->orderBy('id', 'DESC')->paginate(25); 
        // $orderslist = Customer::paginate(5); 
// dd($orderslist);
        return view('admin.dashboard.neworder')->with('orders',$orderslist);
       
      }
      
         public function rejectedorderlist()
    {
        $orderslistmanu = Customer::where('admin_reject', '=' , 1)->orderBy('id', 'DESC')->paginate(25); 
        return view('admin.dashboard.rejectlist')->with('orders',$orderslistmanu);
       
      }
      
         public function approve($order)
    {
        $ldate = date('Y-m-d');

          $orderdetail = Customer::where('id','=', $order)->update(['admin_status' => 1 , 'admin_approve_date' => $ldate]); 
                  return redirect('/admin/dashboard/neworder');

        // return redirect('/admin/dashboard/neworder');
       
      }
      
      
         public function rejectedorderApprove($order)
    {
          $orderdetail = Customer::where('id','=', $order)->update(['admin_status' => 1 ,'admin_reject' => 0]); 
                  return redirect('/admin/dashboard/neworder');

        // return redirect('/admin/dashboard/neworder');
       
      }
      
        public function reject($order)
    {
        // dd($order);
          $orderreject = Customer::where('id','=', $order)->update(['admin_reject' => 1]); 
                  return redirect('/admin/dashboard/neworder');

        // return redirect('/admin/dashboard/neworder');
       
      }
      
      
           public function orderdetail($order)
    {
          $orderdetail = Customer::where('id','=', $order)->get();
          
       
          
      return view('admin.dashboard.orderdetail')->with('orderdetail',$orderdetail);
       
      }
      
    //           public function showorderdetail()
    // {
          
          
    //     return view('admin.dashboard.orderdetail');
       
    //   }
      
      
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
