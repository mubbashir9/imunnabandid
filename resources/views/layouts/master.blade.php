<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
	<link rel="icon" href="{{asset('public/public/vaxiban_logo.png')}}" type="image/png" sizes="16x16">
    <!-- Title Page--> 
    <title>Vaccination Detail</title>
	
	<!-- Style CSS-->
	<link href="{{asset('public/frontview/style.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"-->
<!--        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->

</head>

<body>
 
   <div class="container">
                @yield('content')
                </div>
    

    <script>
		$(document).ready(function(){
		    $("#for_data").hide();
		    
            setTimeout(function() {
               $('#mydiv').fadeOut('fast');
           }, 5000); // <-- time in milliseconds
           
           setTimeout(function() {
               $("#for_data").fadeIn();
               $("#for_loader").hide();
           }, 5000); // <-- time in milliseconds
          

		    $('#userModal').modal('show');
			$('#myModal').modal('show');
			//var isshow = localStorage.getItem('isshow');
			//if (isshow === null) {
			//	localStorage.setItem('isshow', 1);
				// Show popup here
			//	$('#myModal').modal('show');
			//} else {
			//  console.log("Already see")
			//}
			$('#datepicker').datepicker({ 
				uiLibrary: 'bootstrap4'
			});
			
			$('select[name="vaccine"]').change(function() {
				const current_value = $(this).val();
				if(current_value === "Pfizer-BioNTech"){
					$("#lot_no").attr( 'maxlength','6');
				}else if(current_value === "Moderna"){
					$("#lot_no").attr( 'maxlength','7');
				}else if(current_value === "Johnson & Johnson"){
					$("#lot_no").attr( 'maxlength','7');
				}
			}); 
			
			
			
			
			
			
// 		$( window ).on( "load", function() {

            var product_name = $('#productname').val().replace(/ /g,'');
             var first_name = $('#first_name').val().replace(/ /g,'');
             var shipping_address = $('#shipping_address').val().replace(/ /g,'');
             var last_name = $('#last_name').val().replace(/ /g,'');
             var email = $('#email').val();
             var orderno = $('#orderno').val();
             var orderdate = $('#orderdate').val();
             var linkno = $('#linkno').val();
            var link = "aliinfotech.com/vaxiband/show/" + product_name + "-" + first_name + "-" + shipping_address + "-" + last_name + "-" + email + "-" + orderno + "-" + linkno + "-" + orderdate;
        
              $.ajax({
                  url: '{{url('/customer-record')}}',
                  type: "get",
                  data: {
                      orderno: orderno,
                    orderdate : orderdate,
                    link : link,
                    linkno : linkno,
                  },
                  cache: false, 
                  success: function(data){
                      console.log(data);
                      if(data.success !== ""){
                          $("div.vdp_modal_msg").html(`<div class="alert alert-danger" role="alert">${data.success}</div>`);
                          $( "#vdp_modal_btn_success_msgin").hide();
                      }else {
                          $( "#vdp_modal_btn_success_msgout").hide();
                          $( "#vdp_modal_btn_success_msgin").show();
                      }
              }
          });
      





// });
	
			
			
			
		});
	</script>
</body>

</html>
<!-- end document-->