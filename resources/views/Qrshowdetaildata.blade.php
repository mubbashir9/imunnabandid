@extends('layouts.master')


@section('content')



<div class="container"> 
    <div class="row ">
        <div class="col-lg-8 mx-auto">
            <div class="card my-5 mx-auto p-4 bg-white">
                <div class=" text-center">
                    <img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
                    <h4 class="mt-3">Vaccination Info</h4>
                </div>
                <div class="card-body bg-white">
                    <div class="container">
                        <form> 
                             @forelse($details as $det)
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label class="custom-lable" for="form_name">First Name</label> <input
                                                id="form_name" type="text" value="{{Crypt::decrypt($det->firstname)}}" name="firstname"
                                                class="form-control" placeholder="Please enter your firstname" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label class="custom-lable" for="form_lastname">Last Name</label>
                                            <input id="form_lastname" type="text" value="{{Crypt::decrypt($det->lastname)}}"
                                                name="lastname" class="form-control"
                                                placeholder="Please enter your lastname" readonly />
                                        </div>
                                    </div>
                                </div> 
								<div class="row">
								<div class="col-md-6">
                                        <div class="form-group"> <label class="custom-lable" for="form_name">Vaccine Type</label>
                                            <input type="text" name="vaccine" class="form-control"
                                value="{{Crypt::decrypt($det->vaccine)}}" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label class="custom-lable" for="form_lastname">Lot No</label>
                                            <input type="text" name="lotno" class="form-control"
											value="{{Crypt::decrypt($det->lotno)}}" readonly />
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label class="custom-lable" for="form_lastname">Vaccination Date</label>
                                            <input type="text" name="finalVaccinationDate" class="form-control" 
                                value="{{Crypt::decrypt($det->finalVaccinationDate)}}" readonly />
                                        </div>
                                    </div>
                                </div>
                               
							   <div class="row">
                                     <div class="col-md-6">
                                        <label class="custom-lable" for="form_lastname">Vaccination Card</label>
                                        <div class="qr-code-img-wrapper " style="width: 100%; height: 150px;">
											<img  src="{{Url('/public/card_images/'.Crypt::decrypt($det->image))}}" alt="Girl in a jacket" width="100%" height="150px" class="rounded">
									    </div>
                                    </div>
                                </div>
							   
							   
                            </div>
                            @empty
                            <p>No Customer Details found</p>
                            @endforelse
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
	
</div>

@endsection