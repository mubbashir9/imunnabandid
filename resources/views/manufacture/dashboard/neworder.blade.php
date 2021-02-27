@extends('manufacture.layout.manufacturemaster')

@section('content')


<div class="row">
	<div class="col-md-12 col-lg-12 col-sm-12">
		<div class="white-box">
			<div class="d-md-flex mb-3">
				<h3 class="box-title mb-0">Orders List</h3>
				<div class="col-md-3 col-sm-4 col-xs-6 ml-auto">
					<!--<select class="form-control row border-top">-->
					<!--	<option value="" selected="" disabled="">Please Select Action</option>-->
					<!--	<option>In Manu</option>-->
					<!--	<option>QC Image</option>-->
					<!--	<option>Completed</option>-->
					<!--</select>-->
				</div>
			</div>
			<div class="table-responsive">
			    @if($errors->any())
                <p style="color:red">{{$errors->first()}}</p>
                @endif
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <center>
                        <h2 style="list-style-type: none;">{!! \Session::get('success') !!}</h2>
                    </center>
                </div>
                @endif
				<table class="table no-wrap">
					<thead>
						<tr>
							<th class="border-top-0">#</th>
							<th class="border-top-0">Order No</th>
							<th class="border-top-0">Order Details</th>
							<th class="border-top-0">QR Code</th>
							<th class="border-top-0">Action</th>
							<th class="border-top-0">Status</th>

						</tr>
					</thead>
					<tbody id="searchTable">
                        @forelse($orders as $data)

						<tr>
							<td>1</td>
							<td class="txt-oflo">{{$data->id}}</td>

							<td class="txt-oflo">Click here to copy</td>
							<td><span class="text-success">Download</span></td>
                            <td class="txt-oflo">
                            @if($data->in_manu == 0)
                                <button class="btn btn-danger"><a style="color: white" href="{{url('/manufacture/dashboard/manufacturing/'.$data->id)}}">In Manu</a></button>
                            @else
                               <button style="color: white" class="btn btn-success" disabled>In Manu</button>
							@endif

							@if($data->in_manu == 1 && $data->qc_image == 0)
								<button class="btn btn-danger" ><a style="color: white" href="{{url('/manufacture/dashboard/qcimage/'.$data->id)}}"> QC Image</a></button>
                            @else
                                <button style="color: white" class="btn btn-success" disabled>QC Image</button>
.                            @endif

                            @if($data->in_manu == 1 && $data->qc_image == 1 &&  $data->completed  == 0)
								<button class="btn btn-danger" ><a style="color: white" href="{{url('/manufacture/dashboard/shipping-form/'.$data->id)}}" > Completed</a></button>
                            @else
							    <button style="color: white" class="btn btn-success" disabled>Completed</button>
							@endif
							</td>
							
							
							 @if($data->admin_status == 0)
                                                 
                                                  <td class="txt-oflo">New</td>
                                                    @endif
                                             
                                               @if($data->admin_status == 1 && $data->in_manu == 0)
                                              
                                              <td class="txt-oflo">Approved</td>
                                              @endif
                                              
                                               @if($data->in_manu == 1 && $data->admin_status == 1 && $data->qc_image == 0) 
                                             
                                                <td class="txt-oflo">Manufacturing</td>
                                                @endif
                                                
                                                @if($data->in_manu == 1 && $data->admin_status == 1 && $data->qc_image == 1 && $data->completed == 0) 
                                             
                                                <td class="txt-oflo">QC</td>
                                                @endif
                                                
                                                    @if( $data->completed == 1) 
                                             
                                                <td class="txt-oflo">Completed</td>
                                                @endif

						<tr>
						      @empty
                                   <p>No Order Found</p>
                        @endforelse
					</tbody>
				</table>
				{{ $orders->links() }}
			</div>
		</div>
	</div>
</div>

@endsection
