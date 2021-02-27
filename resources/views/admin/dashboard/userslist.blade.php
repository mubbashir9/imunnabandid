@extends('admin.layout.adminmaster')

@section('content') 


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Manufacturers List</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ml-auto">
                                       <button type="button"  class="add-new-menufacturer btn btn-success" ><a href="{{ url('/admin/dashboard/user/registration') }}"> Add New Menufacturer</a></button>

                                   <!--<button type="submit" class="btn btn-success">Add New User</button>-->
                                   
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Name</th>
                                     <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Created At</th>
                                    <th class="border-top-0">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="searchTable">
                                        @forelse ($users as $index => $list)
                                       
                                        <tr>

                                            <td>{{$index + 1}}</td>
                                            <td class="txt-oflo">{{$list->name}}</td>
                                            
                                            <td class="txt-oflo">{{$list->email}}</td>
                                            <td><span class="text-success">{{$list->created_at}}</span></td>
                                               
                                               
                                               
                                              <td class="txt-oflo">
                                                  <!--<form action="{{ url('/admin/delete-manufacture/'.$list->id) }}" method="post">-->
                                                      
                                                  <!--    @csrf-->
                                                  <button type="submit" class="btn btn-danger"><a style="color: white" href="{{url('/admin/delete-manufacture/'.$list->id)}}">Delete</a></button>
                                                   <!--</form>-->
                                                  </td>
                                             
                                                </tr>
                                    
                                   @empty
                                   <p>No Order Found</p>
                                   @endforelse
                                    </tbody>
                                </table>
                                 {{ $users->links() }}

                            </div>
                        </div>
                    </div>
                </div>



@endsection
