@extends('admin.layout.adminmaster')

@section('content')


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Menu QC List</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ml-auto">
                                    <select class="form-control row border-top">
                                        <option>March 2017</option>
                                        <option>April 2017</option>
                                        <option>May 2017</option>
                                        <option>June 2017</option>
                                        <option>July 2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Order#</th>
                                     <th class="border-top-0">O.Date</th>
                                     <th class="border-top-0">From Date</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Card Image</th>
                                    <th class="border-top-0">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td><span class="text-success">$24</span></td>
                                              <td class="txt-oflo">April 18, 2017</td>
                                              <td class="txt-oflo"><button type="button" class="btn btn-danger">Accept</button></td>
                                           
                                        
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td><span class="text-success">$24</span></td>
                                              <td class="txt-oflo">April 18, 2017</td>
                                              <td class="txt-oflo"><button type="button" class="btn btn-danger">Accept</button></td>
                                                                                 

                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td><span class="text-success">$24</span></td>
                                              <td class="txt-oflo">April 18, 2017</td>
                                              <td class="txt-oflo"><button type="button" class="btn btn-danger">Accept</button></td>
                                                                                

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



@endsection
