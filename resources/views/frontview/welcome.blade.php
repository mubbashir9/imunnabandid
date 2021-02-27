
@extends('layout.master')


@section('content')



 <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo" id="vac_detail">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <div class="logo">
                        <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
                            <img class="img-responsive"
                                src="https://cdn.shopify.com/s/files/1/0527/0175/7597/files/logo-main_300x300.png?v=1612256286">
                        </a>
                    </div>
                    <div class="title-desc-wrp">
                        <h2 class="text-center">Vaccination Detail</h2>
                        <p>Once you submit your
                            information it will be locked in the system and
                            waiting approval from the Vaxiband team!</p>
                    </div>
                    <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <label class="control-label col-md-4  requiredField">Order No</label>
                            <input class="input--style-1 form-control" type="text" placeholder="Order Number"
                                value="{{$getorder_no}}" name="orderNumber" readonly>
                            <div class="error">@error('OrderNumber') {{$message}} @enderror</div>
                        </div>
                        <div class="input-group">
                            <label class="control-label col-md-4  requiredField">Product Name</label>
                            <input class="input--style-1 form-control" type="text" placeholder="Product Name"
                                value="{{$getproductname}}" name="product" readonly>
                            <div class="error">@error('firstname') {{$message}} @enderror</div>
                        </div>
                        <div class="input-group">
                            <label class="control-label col-md-4  requiredField">First name</label>
                            <input class="input--style-1 form-control" type="text" placeholder="First name"
                                value="{{$getfirstname}}" name="firstname" readonly>
                            <div class="error">@error('firstname') {{$message}} @enderror</div>
                        </div>
                        <div class="input-group">
                            <label class="control-label col-md-4  requiredField">Last name</label>
                            <input class="input--style-1" type="text" placeholder="Last name" value="{{$getlastname}}"
                                name="lastname" readonly>
                            <div class="error"> @error('lastname') {{$message}} @enderror </div>
                        </div>
                        <div class="input-group">
                            <label class="control-label col-md-4  requiredField">Email</label>
                            <input class="input--style-1" type="text" placeholder="Email" value="{{$getemail}}"
                                name="email" readonly>
                            <div class="error">@error('email') {{$message}} @enderror</div>
                        </div>
                        <div class="input-group">
                            <label class="control-label col-md-4  requiredField">Shipping Address</label>
                            <input class="input--style-1" type="text" placeholder="Shipping Address"
                                value="{{$get_country}}" name="shipping" readonly>
                            <div class="error">@error('Shipping') {{$message}} @enderror</div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="control-label col-md-4  requiredField">Shipping Address</label>
                                    <input class="input--style-1 js-datepicker" type="text"
                                        placeholder="Final Vaccination Date" name="date">
                                    <!--<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>-->
                                    <div class="error">
                                        @error('date') {{$message}} @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="control-label col-md-4  requiredField">Vaccine Type</label>
                                    <div class="rs-select2 js-select-simple select--no-search" id="vaccine_type_wrp">
                                        <select id="vaccine" name="vaccine" onChange="select_vc_type()">
                                            <option disabled="disabled" selected="selected">Vaccine</option>
                                            <option>Pfizer-BioNTech</option>
                                            <option>Moderna</option>
                                            <option>Johnson & Johnson</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="error">@error('vaccine') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <!--<div class="input-group">-->
                        <!--    <input class="input--style-1" type="password" placeholder="Password" name="password">-->
                        <!--    <div class="error"> @error('password') {{$message}} @enderror </div>-->
                        <!--</div>-->
                        <div class="input-image">
                            <label class="control-label col-md-4  requiredField">Shipping Avatar</label>
                            <input type="file" id="avatar" name="cart">
                            <div class="error">@error('cart') {{$message}} @enderror</div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="control-label col-md-4  requiredField">Lot No</label>
                                    <input id="lot_no" class="input--style-1" type="text" placeholder="Lot #"
                                        value="{{ old('res_code')}}" name="res_code">
                                    <div class="error">@error('res_code') {{$message}} @enderror</div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
         <div class="wrapper wrapper--w680 " id="faq">
    <div class="card card-1">
        <div class="card-body">
            <details open>
                <summary>FAQ 1</summary>
                <div class="faq__content">
                    <p>Answer 1</p>
                </div>
            </details>
            <details>
                <summary>FAQ 2</summary>
                <div class="faq__content">
                    <p>Answer 2</p>
                </div>
            </details>
            <details>
                <summary>FAQ 3</summary>
                <div class="faq__content">
                    <p>Answer 3</p>
                </div>
            </details>
        </div>
    </div>
</div>

<!--<div class="wrapper wrapper--w680">-->
<!--        <div class="card card-1">-->
<!--            <div class="card-body">-->
<!--                <section class="center">-->
<!--                    <div class="center__inner">-->
<!--                        <div class="content">-->
<!--                            <label class="button" for="modal__state"><i class="fa fa-rocket"></i> Launch it!</label>-->
<!--                            <input type="checkbox" name="modal__state" id="modal__state" class="modal__state">-->
<!--                            <div class="modal__overlay">-->
<!--                                <label for="modal__state" class="modal__overlay-close"></label>-->
<!--                                <div class="modal">-->
<!--                                    <label class="button button--close modal__close" for="modal__state"><i-->
<!--                                            class="fa fa-times"></i></label>-->
<!--                                        <p class="lede">I hereby certify that all of the -->
<!--                                        above personal information,-->
<!--                                        records of vaccinations, and the-->
<!--                                        photo of the COVID-19-->
<!--                                        vaccination are true and correct-->
<!--                                        to the best of my knowledge.-->
<!--                                        <p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
        
    </div>
    
    
    @endsection