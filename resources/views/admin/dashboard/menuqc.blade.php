@extends('admin.layout.adminmaster')

@section('content')


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12"> 
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Menu QC List</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ml-auto text-right">
								<!--<button class="bg-success text-white border-0 px-3 py-2" type="submit">Approve All</button>-->
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
										<!--<th class="border-top-0"></th>-->
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Order No</th>
                                     <th class="border-top-0">O.Date</th>
                                     <th class="border-top-0">From Date</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Band Image</th>
                                    <th class="border-top-0">Action</th>
                                    </tr>
                                    </thead> 
                                    <tbody>
                                        @forelse ($qclist as $index => $list)
                                       
                                        <tr>
											<!--<td><input type="checkbox" value="{{$list->id}}"></td>-->
                                           <td>{{$index + 1}}</td>
                                            <td class="txt-oflo"><a href="{{url('/admin/dashboard/order/'.$list->id)}}">{{Crypt::decrypt($list->orderNumber)}}</a></td>
                                            
                                            <td class="txt-oflo">{{$list->order_date}}</td>
                                            <td><span class="text-success">{{$list->created_at}}</span></td>
                                              <td class="txt-oflo">{{Crypt::decrypt($list->firstname)}} {{Crypt::decrypt($list->lastname)}}</td>
                                               <td class="txt-oflo" id="{{$index}}">
											   
											   <img class="image_wrp" src="{{asset ('/public/bandimage/'.$list->band_image)}}" alt="Card Image" width="50" height="50" style="cursor:pointer;">
											   <div class="modal fade" id="{{$list->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
													aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-body">
																<img src="{{asset ('/public/bandimage/'.$list->band_image)}}" id="imagepreview" style="width: 100%; height: 264px;">
															</div>
														</div>
													</div>
												</div>
											   </td>
                                               
                                               

                                              <td class="txt-oflo">
                                                  <!--<form action="{{ url('/admin/status/'.$list->id) }}" method="post">-->
                                              <button type="submit" class="btn btn-success"><a style="color: white" href="{{url('/admin/dashboard/QC-approve/'.$list->id)}}">Approve<a></a></button>
   
                                                      
                                                  <!--<button type="submit" class="btn btn-success">Approve</button>-->
                                                 
                                                   <!--</form>-->
                                                   
                                                  <button type="submit" class="btn btn-danger"><a style="color: white" href="{{url('/admin/dashboard/QC-reject/'.$list->id)}}">Reject<a></a></button>
                                                  </td>
                                                 
                                            
                                               
                                        </tr>
                                    
                                   @empty
                                   <p>No QC List Found</p>
                                   @endforelse
                                    </tbody>
                                </table>
                                {{ $qclist->links() }}
                            </div>
                        </div>
                    </div>
                </div>



@endsection
