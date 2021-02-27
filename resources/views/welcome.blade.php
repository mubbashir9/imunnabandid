@extends('layouts.master')


@section('content')



<div class="container" id="vaccination-detail-page">  
    <div class="row ">
        <div class="col-lg-8 mx-auto">
            <div class="card my-5 mx-auto p-4 bg-white">
                <div class=" text-center">
                    <img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
                    <h4 class="mt-3">Vaccination Detail</h4>
                    <p class="px-5">Once you submit your information it will be locked in the system and waiting
                        approval from the Vaxiband team</p>
                </div>
                <div class="card-body bg-white">
                    <div class="container">
                        <form id="vaccination-detail-form" role="form" action="{{ url('/store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input id="linkno" type="hidden" value="{{$linkno}}" name="linkno"/>
                            <input id="orderdate" type="hidden" value="{{$order_date}}" name="orderdate"/>
                            <input id="city" type="hidden" value="{{$city}}" name="city"/>
                            <input id="street" type="hidden" value="{{$street}}" name="street"/>
                            <input id="country" type="hidden" value="{{$get_country}}" name="country"/>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Order Number</label> <input
                                                id="orderno" type="text" value="{{$getorder_no}}" name="orderNumber"
                                                class="form-control" placeholder="Please enter your order number" readonly />
                                            <div class="feedback">@error('OrderNumber') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Prouduct Name</label>
                                            <input id="productname" type="text" value="{{$getproductname}}"
                                                name="product" class="form-control"
                                                placeholder="Please enter product name" readonly />
                                            <div class="feedback">@error('product') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">First Name</label> <input
                                                id="first_name" type="text" value="" name="firstname"
                                                class="form-control" placeholder="Please enter your firstname" />
                                            <div class="feedback">@error('firstname') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Last Name</label>
                                            <input id="last_name" type="text" value=""
                                                name="lastname" class="form-control"
                                                placeholder="Please enter your lastname"/>
                                            <div class="feedback">@error('lastname') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email</label> <input
                                                id="email" type="email" value="{{$getemail}}" name="email"
                                                class="form-control" placeholder="Please enter your email" readonly />
                                            <div class="feedback">@error('email') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Shipping Address</label> 
										<!--<input
                                                id="shipping_address" type="textarea" value="{{$street}}/{{$city}}/{{$get_country}}" name="shipping"
                                                class="form-control" placeholder="Please enter your shipping address" readonly />-->
												<textarea class="form-control" id="shipping_address" name="shipping" placeholder="Please enter your shipping address" readonly>{{$street}}/{{$city}}/{{$get_country}}</textarea>
                                            <div class="feedback">@error('Shipping') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Last Vaccination Date</label>
                                            <input class="form-control" placeholder="Please enter date" id="datepicker" name="date" />
                                            <div class="feedback">@error('date') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Vaccine Type
                                            </label> <select id="vaccine" name="vaccine"
                                                class="form-control" />
                                            <option value="" selected disabled>Please Select Vaccine</option>
                                            <option>Pfizer-BioNTech</option>
                                            <option>Moderna</option>
                                            <option>Johnson & Johnson</option>
                                            </select>
                                            <div class="feedback">@error('vaccine') {{$message}} @enderror</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Upload Your Vaccination Card Here</label>
                                            <input type="file" name="cart" class="form-control-file border p-1">
                                            <div class="feedback">@error('cart') {{$message}} @enderror</div>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Lot Number</label>
                                            <input id="lot_no" type="text" value="{{ old('res_code')}}"
                                                name="res_code" class="form-control" maxlength="0"
                                                placeholder="Please enter lot no" />
                                            <div class="feedback">@error('res_code') {{$message}} @enderror</div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
									<div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Please Enter Your Pin Number</label>
                                            <input type="text" value=""
                                                name="first_pin" class="form-control" maxlength="4"
                                                placeholder="Please enter pin no" /> 
                                            <!--<div class="feedback">@error('res_code') {{$message}} @enderror</div>-->
                                        </div> 
                                    </div>
									<div class="col-md-6">
                                        <div class="p-1 my-4 form-group text-right"> <input type="submit"
                                                class="btn btn-primary text-white" value="Submit Detail"> </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
	
	<div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="mx-auto">
               <div class="container">

                        <!-- The Modal -->
                        <div class="modal hide fade" role="dialog" data-keyboard="false" data-backdrop="static" id="myModal"> 
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" id="for_data">

                                    <!-- Modal Header -->
                                    <div class="modal-header text-center"> 
                                        <img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
                                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body py-5"> 
                                        <div class="vdp_modal_msg"></div>     
                                        <p> 
											I hereby certify that all of the above personal information, records of vaccinations, and the photo of the COVID-19 vaccination are true and correct to the best of my knowledge.
										</p>
										<div class="text-center">
										  <label class="form-check-label" for="terms-services">
											<input type="checkbox" class="form-check-input" id="terms-services" name="vehicle1" value="something" onclick="return false;" checked>I Agree Terms & Coditions
										  </label>
										</div> 
										<div class="text-center mt-2">
											<a class="link" target="_blank"  href="{{url('/Terms-condition')}}">Terms of Service</a>
										</div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                       <div class="form-group mt-2 text-center"> 
                                       <input id="vdp_modal_btn_success_msgin" type="submit" 
                                                class="btn btn-primary text-white" value="Agree And Submit"
												data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" 
												>
												<input id="vdp_modal_btn_success_msgout" type="button" class="btn btn-primary text-white" value="Agree And Submit" disabled>
												</div>
                                    </div>

                                </div>
                                
                                <div class="modal-content" id="for_loader">

                                    <!-- Modal Header -->
                                    <div class="modal-header text-center"> 
                                        <img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
                                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    </div>
 
                                    <!-- Modal body -->
                                    <div class="modal-body py-5"> 
                                        <div class="text-center py-5">
                                            <div class="py-5"><div class="spinner-border text-primary"></div></div>
                                        </div>     
                                    </div> 
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                       <div class="form-group mt-2 text-center"></div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>     
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
	
	
</div>

@endsection