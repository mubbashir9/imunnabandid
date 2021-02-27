@extends('layouts.master')


@section('content')



<div class="container" id="vaccination-detail-page">  
	<div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="mx-auto">
               <div class="container">

                        <!-- The Modal -->
                        <div class="modal hide fade" role="dialog" data-keyboard="false" data-backdrop="static" id="myModal"> 
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header text-center"> 
                                        <img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
                                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body py-5"> 
                                        <div class="text-center">
											<p>A Covid -19 Vaccination Record Card is HIPAA protected medical information.</p>
										<p>To access this information, I certify that either, I am the individual certified above.</p>
										<p>I have received permission of the individual certified above to access that information, as evidenced by my entry
											the individual PIN code determined by certified individual below.</p>
										</div>
										<form action="{{url('/Customer-info/show-detail')}}" method="post">
											@csrf
											<input type="hidden" value="{{$id}}" name="id" class="form-control" />
											<div class="row">
												<div class="col-md-12 text-center">
												<div><label id="custume-lb" for="form_name">Pin Code</label></div>
													<div class="d-flex justify-content-center bd-highlight mb-3">
														<div class="p-2 bd-highlight">
															<input type="text" value="" name="pin" class="form-control" maxlength="4"
																placeholder="Pin Code" />
															<div class="feedback text-left">{{$errors->first()}}</div>
														</div>
														<div class="p-2 bd-highlight">
															<input type="submit" class="btn btn-primary text-white" value="Enter">
														</div>

													</div>
												</div>
											</div>
										</form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                       
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