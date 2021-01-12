<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets')}}/admin/assets/images/favicon.ico" />
    @yield('css')
    @yield('javascript')
</head>
<body>

<div class="container-scroller">
@include('admin._header')
    <div class="container-fluid page-body-wrapper">
        @include('admin._sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
              @yield('content')
            </div>
           @include('admin._footer')

           @yield('footer')
        </div>
    </div>
<!-- main-panel ends -->
  </div>

<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('assets')}}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="{{ asset('assets')}}/admin/assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('assets')}}/admin/assets/js/shared/off-canvas.js"></script>
<script src="{{ asset('assets')}}/admin/assets/js/shared/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('assets')}}/admin/assets/js/demo_1/dashboard.js"></script>
<!-- End custom js for this page-->
<script src="{{ asset('assets')}}/admin/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>


</body>

</html>
