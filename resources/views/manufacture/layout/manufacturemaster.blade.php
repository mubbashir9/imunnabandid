<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Vaxiband-Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/public/vaxiban_logo.png')}}">  
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <!--../public/css/style.css-->
    <link href="{{asset('public/admin/css/style.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/admin/css/custom.css')}}" rel="stylesheet"> 
	
	<style>
		b.logo-icon img {
			width: 55% !important;
		} 
		a.navbar-brand {
			justify-content: center;
		}
		button.logout_btn {
			margin-right: 10px;
			background-color: #7ace4c;
			outline: none !important;
			border: none !important;
			color: #ffffff;
			padding: 5px 10px;
			border-radius: 5px;
		} 
	</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{url('/manufacture/dashboard/neworder')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{asset('public/public/vaxiban_logo.png')}}" alt="homepage" />
                        </b>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ml-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <div class="app-search d-none d-md-block mr-3">
                                <input id="searchInput" type="text" placeholder="Search..." class="form-control mt-0">
                                <i class="fa fa-search" style="position: relative;right: 30px;"></i>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <!--<img src="plugins/images/users/varun.jpg" alt="user-img" width="36"-->
                                <!--    class="img-circle">-->
                                    <span class="text-white font-medium">Manufacturer</span></a>
                        </li>
                        <li>
                            <form action="{{url('/logout')}}" method="post">
                                
                                @csrf
                            <div>
                              <button class="logout_btn" type="submit">
                            logout
                              </button>
                             
                            </div>
                            </form>
                             </li>
							 
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <!--<li class="sidebar-item pt-2">-->
                        <!--    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/manufacture/dashboard')}}"-->
                        <!--        aria-expanded="false">-->
                        <!--        <i class="far fa-clock" aria-hidden="true"></i>-->
                        <!--        <span class="hide-menu">Dashboard</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/manufacture/dashboard/neworder')}}"
                                aria-expanded="false">
                                <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                                <span class="hide-menu">New Orders</span>
                            </a>
                        </li>
                      
                        
                        
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/manufacture/dashboard/completed-order')}}"
                                aria-expanded="false">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Completed Orders</span>
                            </a>
                        </li>
                        
                    
                     
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="#">Dashboard</a></li>
                            </ol>
                            <!--<a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"-->
                            <!--    class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade-->
                            <!--    to Pro</a>-->
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                
                <div class="container">
                @yield('content')
                </div>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
             
            
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © by <a
                    href="https://www.wrappixel.com/">Vaxiband.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->  
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('public/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('public/admin/plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('public/admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('public/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('public/admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('public/admin/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('public/admin/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('public/admin/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('public/admin/js/pages/dashboards/dashboard1.js')}}"></script>
	
	<script> 
		
		$(document).ready(() => { 
			$("#searchInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#searchTable tr").filter(function() {
				  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
				});
			  });
	
        $(".image_wrp").on("click", function () {  
			var pr_image_wrp = $(this).parent().attr("id"); 
			if(pr_image_wrp){
				var modal_id = $(`#${pr_image_wrp} div:first`).attr("id")
            $('#imagepreview').attr('src', $('#imageresource').attr('src'));
            $(`#${modal_id}`).modal('show');
			}
        });
		})
		
    </script>
</body>

</html>