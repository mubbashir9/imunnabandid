<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\User;
use App\Customer;
use Image;
use App\Shippingaddress;
use Hash;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Manufacturecontroller extends Controller
{
    public $value;
    public $name;
    
    
    public function show()
    {
    
        return view('manufacture.login');
       
      }
      
      public function showdashboard()
    {
        //  $username =$name;
        return view('manufacture.dashboard.neworder');
       
      }
      
      
      
      
         public function uploadCSV()
    {
        //  $username =$name;
        return view('manufacture.dashboard.uploadcsv');
       
      }
      
      
      
      
      
      
      
      public function uploadimage(Request $request)

    {

        $request->validate([
          'images' => 'required',
        ]);
        
        if($request->hasfile('images'))
         {
            //  dd($request->hasfile('images'));

            foreach($request->file('images') as $image)
            {
                
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;
                $image_name = str::of($name)->before('.');
                $ldate = date('Y-m-d');
                Customer::where('linkno','=', $image_name)->update(['band_image'=>$name , 'qc_image'=>1 , 'qc_image_date'=>$ldate]);
            }
            
         }
    

        return back()->with('success', 'Your images has been successfully');
    }
      
      
      
      
      
      
      
        public function uploadFile(Request $request){

    if ($request->input('submit') != null ){

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
    //   $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        // if($fileSize <= $maxFileSize){

          // File upload location
          $location = public_path('uploads');

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
        $filepath = ($location."/".$filename);

          // Reading file
         $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;
          
          

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             
             // Skip first row (Remove below comment if you want to skip the first row)
             /*if($i == 0){
                $i++;
                continue; 
             }*/
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){
             
            //   $in_manu = str::of($importData[0])->before(';');
            $linkno = str::of($importData[0])->after(';')->before(';');


            $insertData = array(
              "in_manu"=>str::of($importData[0])->before(';'),
              "in_manu_date"=>date('Y-m-d'),
              "linkno"=>str::of($importData[0])->after(';')->before(';')
            
              );
            Customer::where('linkno','=', $linkno)->update($insertData);

          }
          return redirect('/manufacture/dashboard/neworder');
        //   return $this->sendResponse('Import Successful.');
        // }else{
        //     return $this->sendError('File too large. File must be less than 2MB.');
        // }

      }else{
          return redirect('/manufacture/dashboard/neworder');
        //   return $this->sendError('Invalid File Extension.');
       
      }

    }

    // Redirect to index
    // return redirect('/manufacture/dashboard/upload-csv');
  }
      
      
      
      
      
      
      
      
      
      
      
      
 
  
      
         public function shippingsuccess(request $request)
    {
       
         $create_shipping_add = request()->validate([
           'name'=> 'required',
           'shipping'=> 'required',
           
        ]);
        $create_shipping_add = new Shippingaddress;
        $create_shipping_add->cus_id = $request->id;
        $create_shipping_add->company_name = $request->name;
        $create_shipping_add->shipping_number = $request->shipping;
        $create_shipping_add->shipping_address = $request->address;
        $create_shipping_add->save();
        
        
        $order_completed_date = date('Y-m-d');
         $completed = Customer::where('id','=', $request->id)->update(['completed' => 1 , 'order_completed_date' => $order_completed_date]); 

        
        //  $username =$name;
        return redirect('/manufacture/dashboard/neworder');
       
      }
      
         public function shippingform($id)
    {
        
    //   $completed = Customer::where('id','=', $id)->update(['completed' => 1]); 
    
       $getshipping_address = Customer::where('id','=', $id)->first();         

        return view('manufacture.dashboard.shippingform',compact('getshipping_address','id'));
       
      }
      
        public function logout(request $request)
    {
        $request->session()->forget('email');

        return redirect('/manufacture/login');
       
      }
      
          public function menuqc()
    {
        

        return view('admin.dashboard.menuqc');
       
      }
      
             public function completedorders()
    {
         $completed_orders = Customer::where('completed' ,'=','1')->orderBy('id', 'DESC')->paginate(25);
        
        return view('manufacture.dashboard.completedorders')->with('comorders',$completed_orders);
       
      }
      
                public function users()
    {
        

        return view('admin.dashboard.users');
       
      }
      
       public function neworder()
     {
        
        $orderslist = DB::table('customers')
        ->where('admin_status' , '=', 1)->where('reset_order' , '!=', 1)->orderBy('id', 'DESC')
        ->paginate(25); 
        return view('manufacture.dashboard.neworder')->with('orders',$orderslist);
       
      }
      
      public function manufacturingstatus($id)
      { 
          
           $ldate = date('Y-m-d');
          $manufacturingstatus = Customer::where('id','=', $id)->update(['in_manu' => 1, 'in_manu_date' => $ldate]); 
          return redirect()->back()->with('success', 'In Manufacturing Process'); 
      }
      
    public function qcimage($id)
      {     
         
        //  dd($id);
        //   $qcimage = Customer::where('id','=', $id)->update(['qc_image' => 1]); 
        return view('manufacture.dashboard.QCimage')->with('id',$id);
      }
      
      
    //   public function uploadimage(request $request)
    //   {     
    //       $user = request()->validate([
    //       'cart'=> 'required',
    //     ]);
        
    //     if($request->hasFile('cart')){
    //         $origionalImage = $request->file('cart');
    //         $thumbnailImage = Image::make($origionalImage);
    //         $origionalname= time().$origionalImage->getClientOriginalName();
    //         $thumbnailPath = public_path('bandimage/');
            
    //         // dd($thumbnailPath);
    //         $thumbnailImage->save($thumbnailPath.time().$origionalImage->getClientOriginalName());
            
    //         // $Origionalname = Crypt::encrypt($origionalname);
    //         $qc_image_date = date('Y-m-d');
    //         $upload = Customer::where('id', '=' , $request->id)->update(['band_image' => $origionalname , 'qc_image' => 1 , 'qc_image_date' => $qc_image_date]);
    //         return redirect('/manufacture/dashboard/neworder');
    //     }
        
        
    //   }
      
      
    public function completed($id)
      { 
          $order_completed_date = date('Y-m-d');
          $completed = Customer::where('id','=', $id)->update(['completed' => 1 , 'order_completed_date' => $order_completed_date]); 
          return redirect()->back()->with('success', 'Order Completed Sucessfully'); 
      }
    public function login(Request $request)
    {

        
        $request_email = $request->email;
        $request_password = $request->password;
    
        
         $admin = User::where('email', $request_email)->where('role',1)->first();
         

          if($admin != null){
               $email = $admin->email;
               $name = $admin->name;
          $password = $admin->password;
          $role = $admin->role; 
              
               if($request_email == $email && $role == 1){
               if(Hash::check($request_password, $password)){
                  $name = session()->put('name', $name );
                $value = session()->put('email', $request_email );
             
                   return redirect('/manufacture/dashboard/neworder');
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
