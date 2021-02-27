@extends('manufacture.layout.manufacturemaster')

@section('content')


                        <div class="row">
                        	<div class="col-md-12 col-lg-12 col-sm-12">
                        		<div class="white-box">
                        		     <form action="{{url('/manufacture/dashboard/upload-qcimage')}}" method="post" enctype="multipart/form-data">
                        		         
                        		         @csrf
                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Upload Band Image Here</label>
                                       
                                         <input type="hidden" name="id" value="{{$id}}">
                                            <input type="file" name="cart" class="form-control-file border p-1">
                                            <div class="feedback">@error('cart') {{$message}} @enderror</div>
                                           
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="mt-2 form-group"> <input type="submit"
                                                class="btn btn-primary text-white" value="Upload Band Image"> </div>
                                    </div>
                                </div>
                                 </form>
		</div>
	</div>
</div>

@endsection
