@extends('admin.layout.adminmaster')

@section('content')


                <div class="row justify-content-center">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title py-2">Customer Details</h3> 
                             @foreach($orderdetail as $list)
                            <form id="vaccination-detail-form" role="form" action="{{ url('/admin/dashboard/customer/update/'.$list->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf  
                          
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Order Number</label> <input
                                                id="form_name" type="text" value="{{Crypt::decrypt($list->orderNumber)}}" name="orderno"
                                                class="form-control" placeholder="Please enter your order number" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Prouduct Name</label>
                                            <input id="form_lastname" type="text" value="{{Crypt::decrypt($list->product)}}"
                                                name="product" class="form-control"
                                                placeholder="Please enter product name" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">First Name</label> <input
                                                id="form_name" type="text" value="{{Crypt::decrypt($list->firstname)}}" name="firstname"
                                                class="form-control" placeholder="Please enter your firstname" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Last Name</label>
                                            <input id="form_lastname" type="text" value="{{Crypt::decrypt($list->lastname)}}"
                                                name="lastname" class="form-control"
                                                placeholder="Please enter your lastname" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email</label>
											<input
                                                id="form_email" type="email" value="{{Crypt::decrypt($list->email)}}" name="email"
                                                class="form-control" placeholder="Please enter your email" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Street Address</label> 
											<input
                                                id="form_name" type="text" value="{{Crypt::decrypt($list->shippinginformation)}}" name="shippinginformation"
                                                class="form-control" placeholder="Please enter your shipping address" readonly />
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">City</label> <input
                                                id="form_name" type="text" value="Chicago" name="city"
                                                class="form-control" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Country</label> <input
                                            id="form_name" type="text" value="United State" name="country"
                                                class="form-control" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Last Vaccination Date</label>
                                            <input class="form-control" placeholder="Please enter date" id="datepicker" name="date" />
											<i class="fa fa-calendar" id="icon-datepicker" aria-hidden="true" style="position: absolute; right: 30px;top: 40px;" ></i>
                                            <div class="feedback">@error('date') {{$message}} @enderror</div>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Vaccine Type
                                            </label> <select id="vaccine" name="vaccine"
                                                class="form-control" />
                                            <option value="{{Crypt::decrypt($list->vaccine)}}" selected>{{Crypt::decrypt($list->vaccine)}}</option>
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
                                             <input type="text" id="lot_no" name="lotno" class="form-control"
											value="{{Crypt::decrypt($list->lotno)}}" maxlength="0" />
                                            <div class="feedback">@error('res_code') {{$message}} @enderror</div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
									<div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Please Enter Your Pin Number</label>
                                            <input type="text" value="{{Crypt::decrypt($list->current_pin)}}"
                                                name="first_pin" class="form-control" maxlength="4"
                                                placeholder="Please enter pin no" />  
                                            <!--<div class="feedback">@error('res_code') {{$message}} @enderror</div>-->
                                        </div> 
                                    </div>
									<div class="col-md-6">
                                        <div class="p-1 my-4 form-group text-right"> <input type="submit"
                                                class="btn btn-primary text-white" value="Update"> </div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                         @endforeach
                        </div>
                    </div>
                </div>



@endsection
