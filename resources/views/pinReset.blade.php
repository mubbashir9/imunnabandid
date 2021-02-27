@extends('layouts.master')


@section('content')



<div class="container" id="vaccination-detail-page">  
    <div class="row ">
        <div class="col-lg-8 mx-auto">
            <div class="card my-5 mx-auto p-4 bg-white">
                <div class=" text-center">
                    <img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
                    <h4 class="mt-3">Reset Pin Form</h4>
                    
                </div>
                <div class="card-body bg-white">
                    <div class="container">
                        <form id="vaccination-detail-form" role="form" action="{{ url('/customer-pin/reset/') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input id="customerid" type="hidden" value="{{$id}}" name="id"/>
							<div class="row">
								<div class="col-md-12 text-center">
								<div><label id="custume-lb" for="form_name">Pin Number</label></div>
									<div class="d-flex justify-content-center bd-highlight mb-3">
										<div class="p-2 bd-highlight">
											 <input
                                                id="orderno" type="text" value="" name="pin"
                                                class="form-control" maxlength="4" placeholder="Please enter current pin" />
											<div class="feedback text-left">@error('pin') {{$message}} @enderror</div>
										</div> 
										<div class="p-2 bd-highlight">
											<input type="submit" class="btn btn-primary text-white" value="Update">
										</div>

									</div>
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
	

	
	
</div>

@endsection