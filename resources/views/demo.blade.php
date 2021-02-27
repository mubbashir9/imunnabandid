@extends('layouts.master')


@section('content')



<div class="container" id="cutomer-detail-page"> 
    <div class="row ">
        <div class="col-lg-8 mx-auto">
            <div class="card my-5 mx-auto p-4 bg-white">
                <div class=" text-center">
                    <img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
                    <h4 class="mt-3">Customer Details</h4>
					<p>Congratulations! You are on your way to receiving a Vaxiband bracelet. A VaxiBand
employee will review your submission information. Once approved, we will ship your
order out to you in 7-14 days. For now feel free to scan your QR code to see your
profile and vaccination status!</p>
                </div>
                <div class="card-body bg-white">
                    <div class="container">
                        <form id="vaccination-detail-form" role="form" action="{{ url('/store') }}" method="post"
                            enctype="multipart/form-data">
                            @forelse($user_detail as $det)
                            <div class="controls">
									<div class="qr-code-wrapper text-center">
                                        <div class="qr-code-img-wrapper">{!! QrCode::generate('aliinfotech.com/vaxiband/Customer-info'.$user_id) !!}</div>
										<div><p class="qr_message">Scan QrCode<p/></div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Order No</label> <input
                                                id="form_name" type="text" value="{{Crypt::decrypt($det->orderNumber)}}" name="txtName"
                                                class="form-control" placeholder="Please enter your order number" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Prouduct Name</label>
                                            <input id="form_lastname" type="text" value="{{Crypt::decrypt($det->product)}}"
                                                name="product" class="form-control"
                                                placeholder="Please enter product name" readonly />
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">First Name</label> <input
                                                id="form_name" type="text" value="{{Crypt::decrypt($det->firstname)}}" name="firstname"
                                                class="form-control" placeholder="Please enter your firstname" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Last Name</label>
                                            <input id="form_lastname" type="text" value="{{Crypt::decrypt($det->lastname)}}"
                                                name="lastname" class="form-control"
                                                placeholder="Please enter your lastname" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email</label> <input
                                                id="form_email" type="email" value="{{Crypt::decrypt($det->email)}}" name="email"
                                                class="form-control" placeholder="Please enter your email" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Shipping Address</label> <input
                                                id="form_name" type="text" value="{{Crypt::decrypt($det->shippinginformation)}}" name="shippinginformation"
                                                class="form-control" placeholder="Please enter your shipping address" readonly />
                                        </div>
                                    </div>
                                </div>
								<div class="row">
								<div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Vaccine Type</label>
                                            <input type="text" name="vaccine" class="form-control"
                                value="{{Crypt::decrypt($det->vaccine)}}" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Lot No</label>
                                            <input type="text" name="lotno" class="form-control"
											value="{{Crypt::decrypt($det->lotno)}}" readonly />
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_lastname">Vaccination Date</label>
                                            <input type="text" name="finalVaccinationDate" class="form-control" 
                                value="{{Crypt::decrypt($det->finalVaccinationDate)}}" readonly />
                                        </div>
                                    </div>
                                </div>
                               
							   <div class="row">
                                     <div class="col-md-6">
                                        <label for="form_lastname">Vaccination Card</label>
                                        <div class="qr-code-img-wrapper " style="width: 100%; height: 150px;">
											<img src="{{Url('/public/card_images/'.Crypt::decrypt($det->image))}}" alt="Girl in a jacket" width="100%" height="150px" class="rounded">
									    </div>
                                    </div>
                                </div>
							   
							   
                            </div>
                            @empty
                            <p>No Customer Details found</p>
                            @endforelse
                        </form>
                    </div>
                    <div class="text-center mt-5">
                        @forelse($user_detail as $det)
						
						
						<div class="text-center mt-3">
							<span class="txt-blue mr-3"><strong>PIN change URL :</strong></span>
							<a class="link" target="_blank"  href="{{url('/customer-reset-pin/'.$det->id)}}">https://aliinfotech.com/vaxiband/customer-reset-pin/{{$det->id}}</a>
						</div>
						
						
						<div class="text-center mt-3">
							<span class="txt-blue mr-3"><strong>Vaccination info URL :</strong></span>
							<a class="link" target="_blank"  href="{{url('/Customer-info/'.$det->id)}}">https://aliinfotech.com/vaxiband/Customer-info/{{$det->id}}</a>
						</div>
						   @empty
                            <p>No Customer Details found</p>
                            @endforelse
					</div>
					<div class="text-center mt-5 faq_link_wrapper">
						<a class="link" target="_blank"  href="{{url('/faq')}}">FAQs</a>
					</div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
	
</div>

@endsection