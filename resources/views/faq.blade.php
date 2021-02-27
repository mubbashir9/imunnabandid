@extends('layouts.master')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="my-5 mx-auto p-4 bg-white">
			<div class="bg-white">
				<div class=" text-center">
					<img src="{{asset('public/public/vaxiban_logo.png')}}" class="rounded" alt="Vaxiband">
					<h4 class="mt-3">Frequently Asked Questions</h4>
				</div>
			    <div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Question #1
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Question #2
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Question #3
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

</div>
			</div>
		</div>
	</div>
  </div>
</div>

@endsection