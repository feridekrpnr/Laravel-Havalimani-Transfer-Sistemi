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
    </div>
   @yield('content')
    @include('admin._footer')
    @yield('footer')
</div>

</body>

</html>
