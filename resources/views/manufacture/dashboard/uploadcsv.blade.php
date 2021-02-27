@extends('manufacture.layout.manufacturemaster')

@section('content')


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Completed Orders List</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ml-auto text-right">
                                    <!--<select class="form-control row border-top">-->
                                    <!--    <option>March 2017</option>-->
                                    <!--    <option>April 2017</option>-->
                                    <!--    <option>May 2017</option>-->
                                    <!--    <option>June 2017</option>-->
                                    <!--    <option>July 2017</option>-->
                                    <!--</select>-->
                                </div>
                            </div>


     <!-- Message -->
     @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
     @endif

     <!-- Form -->
     <form method='post' action="{{url('/manufacture/dashboard/uploadFile')}}" enctype='multipart/form-data' >
       {{ csrf_field() }}
       <input type='file' name='file' >
       <input type='submit' name='submit' value='Import'>
     </form>

     <!-- Form -->
     <!--<form method='post' action="{{url('/manufacture/dashboard/completed')}}" enctype='multipart/form-data' >-->
     <!--  {{ csrf_field() }}-->
       <!--<input type='file' name='file' >-->
     <!--   <input type="file" name="filename[]" class="form-control">-->
     <!--  <input type='submit' name='submit' value='Import'>-->
     <!--</form>-->
     
    <!--  <form method="post" action="{{ url('/manufacture/dashboard/completed') }}" enctype="multipart/form-data">-->
    <!--  @csrf-->
    <!--  <div class="form-group">-->
    <!--      <input type="file" name="images[]" multiple class="form-control" accept="image/*">-->
    <!--      @if ($errors->has('files'))-->
    <!--        @foreach ($errors->get('files') as $error)-->
    <!--        <span class="invalid-feedback" role="alert">-->
    <!--            <strong>{{ $error }}</strong>-->
    <!--        </span>-->
    <!--        @endforeach-->
    <!--      @endif-->
    <!--  </div>-->

    <!--  <div class="form-group">-->
    <!--    <button type="submit" class="btn btn-success">Save</button>-->
    <!--  </div>-->
    <!--</form>-->

                        </div>
                    </div>
                </div>


@endsection
