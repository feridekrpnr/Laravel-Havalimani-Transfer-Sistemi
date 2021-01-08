<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>


    <link rel="apple-touch-icon" href="{{asset('assets')}}/admin/apple-icon.png">
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/favicon.ico">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @yield('css')
    @yield('javascript')
</head>

<body>
<div class="content mt-8">

@include('admin._sidebar')
    <div id="right-panel" class="right-panel">
        @include('admin._header')
        @yield('content')
    </div>
@include('admin._footer')
@yield('footer')
</body>
</html>
