@extends('admin.layout.adminmaster')

@section('content')


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Orders List</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ml-auto text-right">
								<button class="bg-success text-white border-0 px-3 py-2" type="submit">Approve All</button>
                                    <!--<select class="form-control row border-top">-->
                                    <!--    <option>March 2017</option>-->
                                    <!--    <option>April 2017</option>-->
                                    <!--    <option>May 2017</option>-->
                                    <!--    <option>June 2017</option>-->
                                    <!--    <option>July 2017</option>-->
                                    <!--</select>-->
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
										<th class="border-top-0"></th>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Order No</th>
                                     <th class="border-top-0">O.Date</th>
                                     <th class="border-top-0">From Date</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Card Image</th>
                                    <th class="border-top-0">Action</th>
                                    <th class="border-top-0">Status</th>
                                    </tr>
                                    </thead> 
                                    <tbody id="searchTable">
                                        @forelse ($orders as $index => $list) 
                                        <?php 
                                        $image = Crypt::decrypt($list->image);
                                        ?>
                                        <tr>
											<td><input type="checkbox" value="{{$list->id}}" name="bulk"></td>
                                           <td>{{$index + 1}}</td>
                                            <td class="txt-oflo"><a href="{{url('/admin/dashboard/order/'.$list->id)}}">{{Crypt::decrypt($list->orderNumber)}}</a></td>
                                            
                                            <td><span class="text-success">{{Crypt::decrypt($list->order_date)}}</span></td>
                                             <td><span class="text-success">{{$list->created_at}}</span></td>
                                              <td class="txt-oflo">{{Crypt::decrypt($list->firstname)}} {{Crypt::decrypt($list->lastname)}}</td>
                                               <td class="txt-oflo" id="td_wrp_{{$index}}">    

											   <img class="image_wrp" src="{{asset ('/public/card_images/'.$image)}}" alt="Card Image" width="50" height="50" style="cursor:pointer;">
											   <div class="modal fade" id="{{$list->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
													aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-body"> 
																<img src="{{asset ('/public/card_images/'.$image)}}" class="rounded mx-auto d-block" id="imagepreview" style="width: 100%; height: 264px;">
															</div>
														</div>
													</div>
												</div>
												
											   </td>
                                               
                                               

                                              <td class="txt-oflo">
                                                  <!--<form action="{{ url('/admin/status/'.$list->id) }}" method="post">-->
                                              <button type="submit" class="btn btn-success"><a style="color: white" href="{{url('/admin/status/'.$list->id)}}">Approve<a></a></button>
   
                                                      
                                                  <!--<button type="submit" class="btn btn-success">Approve</button>-->
                                                 
                                                   <!--</form>-->
                                                   
                                                    @if($list->admin_status == 0 )
                                                  <button type="submit" class="btn btn-danger"><a style="color: white" href="{{url('/admin/dashboard/order-reject/'.$list->id)}}">Reject<a></a></button>
                                                  @endif
                                                  </td>
                                                 
                                                  @if($list->admin_status == 0)
                                                 
                                                  <td class="txt-oflo">New</td>
                                                    @endif
                                             
                                               @if($list->admin_status == 1 && $list->in_manu == 0)
                                              
                                              <td class="txt-oflo">Approved</td>
                                              @endif
                                              
                                               @if($list->in_manu == 1 && $list->admin_status == 1 && $list->qc_image == 0) 
                                             
                                                <td class="txt-oflo">Manufacturing</td>
                                                @endif
                                                
                                                @if($list->in_manu == 1 && $list->admin_status == 1 && $list->qc_image == 1 && $list->completed == 0) 
                                             
                                                <td class="txt-oflo">QC</td>
                                                @endif
                                                
                                                    @if( $list->completed == 1) 
                                             
                                                <td class="txt-oflo">Completed</td>
                                                @endif
                                               
                                        </tr>
                                    
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
