<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description"
    content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Ample Admin Lite Template by WrapPixel</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/plugins/images/favicon.png')}}" />
  <!-- Custom CSS -->
  <link href="{{asset('admin/assets/plugins//bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('admin/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" />
  <!-- Custom CSS -->
  <link href="{{asset('admin/assets/css/style.min.css')}}" rel="stylesheet" />
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
    @include('layouts.inc.admin.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layouts.inc.admin.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        @yield('content');

      @include('layouts.inc.admin.footer')

    </div>

  </div>

  <script src="{{asset('admin/assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{asset('admin/assets/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/app-style-switcher.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('admin/assets/js/waves.js')}}"></script>
  <!--Menu sidebar -->
  <script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
  <!--Custom JavaScript -->
  <script src="{{asset('admin/assets/js/custom.js')}}"></script>
  <!--This page JavaScript -->
  <!--chartis chart-->
  <script src="{{asset('admin/assets/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>