<!doctype html>
<html lang="en">

<head>
  <title>{{env('APP_NAME', false)}} | @lang('layout.admin')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="@lang('layout.metaDescription')">
  <meta name="keywords" content="@lang('layout.metaKey')">
  <meta name="author" content="@lang('layout.metaAuthor')">

  <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/animate-css/vivify.min.css')}}">


  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

</head>
<body class="theme-cyan font-montserrat box_layout h-menu auth-body">

<!-- Page Loader -->
<div class="page-loader-wrapper">
  <div class="loader">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <div class="bar4"></div>
    <div class="bar5"></div>
  </div>
</div>

<div class="pattern">
  <span class="red"></span>
  <span class="indigo"></span>
  <span class="blue"></span>
  <span class="green"></span>
  <span class="orange"></span>
</div>

<div class="auth-main particles_js">
  <div class="auth_div vivify popIn">
    <div class="auth_brand">
      <a class="navbar-brand" href="javascript:void(0);"><img src="{{asset('image/logo/logo-light.png')}}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">
        {{env('APP_NAME')}}
      </a>
    </div>
    @yield('content')
  </div>
  <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>
