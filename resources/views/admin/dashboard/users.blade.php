@extends('admin.layout.adminmaster')

@section('content')


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h2>Registration Form</h2>
  <form action="{{url('/admin/dashboard/registration')}}" method="post">
      @csrf
       <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
         <div class="feedback">@error('name') {{$message}} @enderror</div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
               <div class="feedback">@error('email') {{$message}} @enderror</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
               <div class="feedback">@error('password') {{$message}} @enderror</div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
                        </div>
                    </div>
                </div>



@endsection
