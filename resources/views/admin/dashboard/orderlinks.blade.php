@extends('admin.layout.adminmaster')

@section('content')


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12"> 
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Order Link List</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ml-auto text-right">
							
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
										<!--<th class="border-top-0"></th>-->
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Order No</th>
                                    <th class="border-top-0">Links</th>
                                    <th class="border-top-0">Action</th>
                                    </tr>
                                    </thead> 
                                    <tbody id="searchTable">
                                        @forelse ($qclist as $index => $list)
                                       
                                        <tr>
                                           <td>{{$index + 1}}</td>
                                            <td class="txt-oflo">{{$list->orderno}}</td>
                                            
                                              <td class="txt-oflo"><a href="{{$list->link}}">{{$list->link}}</a></td>
                                               <td class="txt-oflo" id="{{$index}}">
											   
											
											   </td>
                                         
                                            <td class="txt-oflo"> 
                                             <button type="submit" class="btn btn-success text-white"><a class="text-white" href="{{url('/admin/dashboard/order-link-reset/'.$list->id)}}">Reset link</a></button>
                                            </td>
                                               
                                                 
                                            
                                               
                                        </tr>
                                    
                                   @empty
                                   <p>No Link List Found</p>
                                   @endforelse
                                    </tbody>
                                </table>
                             {{ $qclist->links() }}
                            </div>
                        </div>
                    </div>
                </div>



@endsection
