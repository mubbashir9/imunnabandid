<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiBaseController as BaseController;
use App\Customer as Product;
use Validator;
use DB;
use App\Customer;
use App\Http\Resources\Customers as ProductResource;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB as FacadesDB;
class CustomerApis extends BaseController
{
   public function customer($token)
    {

        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        // $pro = DB::select('select * from customers');
 $pro = Customer::where('admin_status' ,'=', 1)->get();
            $item = array();
            foreach ($pro as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
    public function customerinmanufacturing($token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $in_manu = Customer::where('in_manu' ,'=', 1)->get();
        
      

            $item = array();
            foreach ($in_manu as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
     public function customerinmanufacturingstatusdate($istatus,$date,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $in_manu_status_date = Customer::where('in_manu' ,'=', $istatus)->where('in_manu_date' ,'=', $date)->get();
        
      

            $item = array();
            foreach ($in_manu_status_date as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
     public function customerinmanufacturingstatus($istatus,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $in_manu_status = Customer::where('in_manu' ,'=', $istatus)->get();
        
      

            $item = array();
            foreach ($in_manu_status as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
     public function customerinmanufacturingdate($manudate,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $in_manu_date = Customer::where('in_manu' ,'=', 1)->where('in_manu_date' ,'=', $manudate)->get();
        
    //   dd($in_manu_date);

            $item = array();
            foreach ($in_manu_date as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
     public function qcimagesstatusdate($istatus,$date,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $in_manu_status_date = Customer::where('qc_image' ,'=', $istatus)->where('qc_image_date' ,'=', $date)->get();
        
    //   dd($in_manu_date);

            $item = array();
            foreach ($in_manu_status_date as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
       public function qcimages($token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $qc_images = Customer::where('qc_image' ,'=', 1)->get();
        
      

            $item = array();
            foreach ($qc_images as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
    
    
       public function qcimagesstatus($istatus,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $qc_images_status = Customer::where('qc_image' ,'=', $istatus)->get();
        
      

            $item = array();
            foreach ($qc_images_status as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
    
      public function qcimagesdate($qcimages,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $qc_images_date = Customer::where('qc_image' ,'=', 1)->where('in_manu_date' ,'=', $qcimages)->get();
        
      

            $item = array();
            foreach ($qc_images_date as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
       public function mocompleted($token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $completed = Customer::where('completed' ,'=', 1)->get();
        
      

            $item = array();
            foreach ($completed as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
      public function mocompletedstatus($istatus,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $completedstatus = Customer::where('completed' ,'=', $istatus)->get();
        
      

            $item = array();
            foreach ($completedstatus as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
    
        public function mocompletedstatusdate($istatus,$date,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $completedstatusdate = Customer::where('completed' ,'=', $istatus)->where('order_completed_date' ,'=', $date)->get();
        
      

            $item = array();
            foreach ($completedstatusdate as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }
    
    
    
    
    
    
       public function mocompleteddate($completedate,$token)
    {
        if($token == "2c7f3d54-f383-4dd9-9a3d-e2b55acefae6")
        {

        $completeddate = Customer::where('completed' ,'=', 1)->where('in_manu_date' ,'=', $completedate)->get();
        
      

            $item = array();
            foreach ($completeddate as $key)
            {

                array_push($item,[
                            Crypt::decrypt($key->orderNumber),
                            Crypt::decrypt($key->product),
                            Crypt::decrypt($key->firstname),
                            Crypt::decrypt($key->lastname),
                            Crypt::decrypt($key->email),
                            Crypt::decrypt($key->shippinginformation),
                            Crypt::decrypt($key->finalVaccinationDate),
                            Crypt::decrypt($key->vaccine),
                            Crypt::decrypt($key->image),
                            Crypt::decrypt($key->lotno),
                            Crypt::decrypt($key->first_pin),
                            Crypt::decrypt($key->current_pin),
                            Crypt::decrypt($key->country),
                            Crypt::decrypt($key->city),
                            $key->linkno,
                            ]);
            }

        return $this->sendResponse($item, 'Customers retrieved successfully.');

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($on_ln)
    {
    $product = Product::where('on_ln','=',$on_ln)->first();
    if (is_null($product))
    {
        return $this->sendError('Customers not found.');
    }
        return $this->sendResponse(new ProductResource($product), 'Customers retrieved successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
      
          return $this->sendResponse('Import Successful.');
        

      }else{
          return $this->sendError('Invalid File Extension.');
       
      }

    }

    // Redirect to index
    // return redirect('/manufacture/dashboard/upload-csv');
  }
      
      
 
 
 
 
 
 
 
 
 
 
 
 public function completedApi(Request $request){

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
      $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size

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
              "completed"=>str::of($importData[0])->before(';'),
              "linkno"=>str::of($importData[0])->after(';')->before(';'),
              "order_completed_date" =>date('Y-m-d'),
              );
        
              $create_shiping_data = array(
              "cus_id"=>str::of($importData[0])->after(';')->after(';')->before(';'),
              "company_name"=>str::of($importData[0])->after(';')->after(';')->after(';')->before(';'),
              "shipping_number"=>str::of($importData[0])->after(';')->after(';')->after(';')->after(';')->before(';'),
              "shipping_address"=>str::of($importData[0])->after(';')->after(';')->after(';')->after(';')->after(';')->before(';'),
            
              );
           
            Customer::where('linkno','=', $linkno)->update($insertData);
            Shippingaddress::create($create_shiping_data);

          }
          return $this->sendResponse('Import Successful.');

       

      }else{
          return $this->sendResponse('Invalid File Extension.');

      }

    }
    

    // Redirect to index
    // return redirect('/manufacture/dashboard/upload-csv');
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
    
return $this->sendResponse('Your images has been successfully');
       
    }    
    
    
    
    
    
    
    
    
}
