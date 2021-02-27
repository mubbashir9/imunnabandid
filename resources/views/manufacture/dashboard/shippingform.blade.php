@extends('manufacture.layout.manufacturemaster')


@section('content')



<div class="row justify-content-center">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title py-2">Shipping Details</h3> 
                            
                            <form id="vaccination-detail-form" role="form"
                            action="{{ url('manufacturer/store/shipping-detail') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input id="id" type="hidden" value="{{$id}}" name="id" />
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Shipping Company Name</label>
                                            <input id="name" type="text" value="" name="name" class="form-control"
                                                placeholder="Please enter shipping company name" />
                                            <div class="feedback">@error('name') {{$message}} @enderror</div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Shipping No</label>
                                            <input id="no" type="text" value="" name="shipping" class="form-control"
                                                placeholder="Please enter shipping no" />
                                            <div class="feedback">@error('shipping') {{$message}} @enderror</div>
                                        </div>

                                    </div> 
                                </div>
                                <div class="row">   
                                    <div class="col-md-6"> 
                                        <div class="form-group"> <label for="form_name">Shipping Address</label> <input
                                                id="address" type="text"
                                                value="{{Crypt::decrypt($getshipping_address->shippinginformation)}}"
                                                name="address" class="form-control" placeholder="Please enter city name"
                                                readonly />
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
                </div>

@endsection