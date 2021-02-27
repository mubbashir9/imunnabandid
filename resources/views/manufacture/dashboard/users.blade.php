@extends('admin.layout.adminmaster')

@section('content')


                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" value=""><br><br>
   <label for="fname">Last name:</label><br>
  <input type="text" id="lname" value=""><br><br>
  <label for="fname">Email:</label><br>
  <input type="text" id="email" value=""><br><br>
  <input type="submit" value="Submit">
</form>
                        </div>
                    </div>
                </div>



@endsection
