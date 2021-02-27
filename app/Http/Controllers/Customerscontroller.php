<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Customer;
use App\Orderlink;
use Image;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Redirect;
class Customerscontroller extends Controller
{
    public function create(request $request)
    {
       

        $data = request()->validate([
            'orderNumber'=> 'required|max:255',
            'product'=> 'required|max:255',
            'firstname'=> 'required|max:255',
            'lastname'=> 'required|max:255',
            'email'=> 'required|max:255|email',
            'shipping'=> 'required|max:255',
            'date'=> 'required|max:255',
            'vaccine'=> 'required|max:100',
            'cart'=> 'required',
            'res_code'=> 'required|max:7',
        ]);
        
        
          $orderno = $request->orderNumber;
          $orderdate = $request->orderdate;
          $linkno = $request->linkno;
                $link = "aliinfotech.com/vaxiband/show/".$request->product."-".$request->firstname."-". $request->country."-".$request->lastname."-". $request->email."-".$request->orderNumber."-".$request->linkno."-".$request->orderdate;
             
                if($get_record = Orderlink::where('linkno','=',$request->linkno)->first()){
                    
               $order_link_detail = Orderlink::where('orderno','=',$request->orderNumber)->where('linkno','=',$request->linkno)->update(['status'=> 0 , 'reset_order'=> 0]);

                }else{
                    Orderlink::create([
            'orderno'=>$orderno,
            'orderdate'=>$orderdate,
            'link'=>$link,
            'linkno'=>$request->linkno,
            ]);
         
                }
          
        
        if($request->hasFile('cart')){
          $origionalImage = $request->file('cart');
             $thumbnailImage = Image::make($origionalImage);
            $origionalname= time().$origionalImage->getClientOriginalName();
            $thumbnailPath = public_path('card_images/');
            $thumbnailImage->save($thumbnailPath.time().$origionalImage->getClientOriginalName());
            
            $on_ln = $request->linkno.''.$orderno;
            $orderNumber = Crypt::encrypt($request->orderNumber);
            $product = Crypt::encrypt($request->product);
            $firstname = Crypt::encrypt($request->firstname);
            $lastname = Crypt::encrypt($request->lastname);
            $email = Crypt::encrypt($request->email);
            $country = Crypt::encrypt($request->country);
            $vaccine = Crypt::encrypt($request->vaccine);
            $date = Crypt::encrypt($request->date);
            $Origionalname = Crypt::encrypt($origionalname);
            $res_code = Crypt::encrypt($request->res_code);
            $first_pin = Crypt::encrypt($request->first_pin);
            $current_pin = Crypt::encrypt($request->first_pin);
             $city = Crypt::encrypt($request->city);
             $street = Crypt::encrypt($request->street);
             $order_date = Crypt::encrypt($request->orderdate);
             $get_onln = Crypt::encrypt($on_ln);
            //  $linkno = Crypt::encrypt($request->linkno);
            // $linkno = Hash::make($request->linkno);
        //   $parameter_dycrypt= Crypt::decrypt($parameter);

            // dd($parameter_dycrypt);
             $data = new Customer;
        $data->orderNumber = $orderNumber;
        $data->product = $product;
        $data->firstname = $firstname;
        $data->lastname = $lastname;
        $data->email = $email;
        $data->shippinginformation = $street;
        $data->vaccine = $vaccine;
        $data->finalVaccinationDate = $date;
        $data->image = $Origionalname;
        $data->lotno = $res_code;
        $data->first_pin = $first_pin;
        $data->current_pin = $current_pin;
        $data->country = $country;
        $data->city = $city;
        $data->order_date = $order_date;
        $data->linkno = $request->linkno;
        $data->on_ln = $get_onln;
        $data->save();
      
        // $order_link_detail = Orderlink::where('orderno','=',$request->orderNumber)->where('linkno','=',$request->linkno)->update(['status'=> 1]);
     
        $user_id = $data->id;
        $user_detail = $data->where('id',$user_id)->get();

        if($data->save()){
            //  QrCode::size(450)->generate('aliinfotech.com/vaxiband/'.$user_id,public_path('qrcodes/'.$user_id.png'));

            QrCode::size(450)->generate('aliinfotech.com/vaxiband/'.$user_id,'public/img/t'.$user_id.'.svg');
            //  $image = QrCode::format('png')
            //      ->merge('public/img/t.png', 0.1, true)
            //      ->size(450)->errorCorrection('H')
            //      ->generate('aliinfotech.com/vaxiband/'.$user_id);
            //         $output_file = '/img/qrcode/img-' . time() . '.png';
            //         Storage::disk('local')->put($output_file, $image);
            return view('demo',compact('data','user_id','user_detail'));
            
        }else{
             return redirect()->back();
        }
                   
        }
    }
    
    public function Qrshow($user_id){
        
        
        // $user_details = Customer::where('id', $user_id)->get();
        return view('qrShowdata')->with('id', $user_id);

    }
    
     public function Qrshowdetail(request $request){
         
         
           $data = request()->validate([
            'pin'=> 'required|max:4',
        ]);
   
        $user_pin = Customer::where('id', $request->id)->get()->pluck('current_pin');
        
        $get_pin = Crypt::decrypt($user_pin[0]);
    
        if($request->pin == $get_pin){
            $user_details = Customer::where('id', $request->id)->get();
            return view('Qrshowdetaildata')->with('details', $user_details);
        }else{
           return Redirect::back()->withErrors(['Please enter the valid pin', 'The Message']);
        }
        

    }
    
      public function faq(){
        
        
     
        return view('faq');

    }
    
       public function termscondition(){
     
        return view('termscondition');

     }
     
       public function updatepin(request $request){
           
        
           $data = request()->validate([
            'pin'=> 'required|max:4',
        ]);
        $pin= Crypt::encrypt($request->pin);
      
        
        $update_pin = Customer::where('id','=',$request->id)->update(['current_pin' => $pin]);
     
       return Redirect::back()->withErrors(['Your PIN number is changed', 'The Message']);

     }
     
     
       public function pinreset($id){
           
        return view('pinReset')->with('id',$id);

     }
      public function linkurlsave(request $request){
          

          
        if(Orderlink::where('linkno','=', $request->linkno)->where('status','=', 1)->where('reset_order','=', 1)->first()){
               return response()->json(['success'=>'']); 
           
         }
          else if(Orderlink::where('linkno','=', $request->linkno)->where('status','=', 0)->where('reset_order','=', 0)->first()){
              return response()->json(['success'=>'You have submitted details for this vaccination band, Please contanct us on vaxiband for further actions.']);
          }else{
              return response()->json(['success'=>'']);
          }
      
     
      
        // return view('termscondition');

     }
    
    
 
    public function show($para)
    {   
       
      
      $getproduct_name = str::of($para)->before('-');
      $getfirstname = str::of($para)->after('-')->before('-');
      $getcountry = str::of($para)->after($getfirstname)->after('-')->before('-');
      $getlastname = str::of($para)->after($getcountry)->after('-')->before('-');
      $getemail = str::of($para)->after($getlastname)->after('-')->before('-');
      $getorder_no = str::of($para)->after($getemail)->after('-')->before('-');
      
      $linkno = str::of($para)->after($getorder_no)->after('-')->before('-');
      $order_date = str::of($para)->after($linkno)->after('-')->before('-');
      $city = str::of($para)->after($order_date)->after('-')->before('-');
      $street = str::of($para)->after($city)->after('-')->before('-');
    // dd($street);
      $getproductname = preg_replace('/([a-z])([A-Z])/s','$1 $2', $getproduct_name);
      $get_country = preg_replace('/([a-z])([A-Z])/s','$1 $2', $getcountry);

        //   return view($para);
//   $data = Crypt::decrypt($para);
//      $val =  array_values($data);
//      dd($val);
    return view('welcome',compact('getorder_no','getproductname','getfirstname','getlastname','getemail','get_country','linkno','order_date','city','street'));
    }
    
    public function enc()
    {  
     return view('encrypt');
    }
}
