<!Doctype html>
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
  <link rel="stylesheet" href="{{asset('vendor/flag-icon-css-master/css/flag-icon.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/animate-css/vivify.min.css')}}">

  <link rel="stylesheet" href="{{asset('vendor/c3/c3.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/light-gallery/css/lightgallery.min.css')}}">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

</head>
<body class="theme-cyan font-montserrat">

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

<!-- Theme Setting -->
<div class="themesetting">
  <a href="javascript:void(0);" class="theme_btn"><i class="icon-magic-wand"></i></a>
  <div class="card theme_color">
    <div class="header">
      <h2>@lang('layout.themeColor')</h2>
    </div>
    <ul class="choose-skin list-unstyled mb-0">
      <li data-theme="green">
        <div class="green"></div>
      </li>
      <li data-theme="orange">
        <div class="orange"></div>
      </li>
      <li data-theme="blush">
        <div class="blush"></div>
      </li>
      <li data-theme="cyan" class="active">
        <div class="cyan"></div>
      </li>
      <li data-theme="indigo">
        <div class="indigo"></div>
      </li>
      <li data-theme="red">
        <div class="red"></div>
      </li>
    </ul>
  </div>
  <div class="card font_setting">
    <div class="header">
      <h2>@lang('layout.fontSetting')</h2>
    </div>
    <div>
      <div class="fancy-radio mb-2">
        <label><input name="font" value="font-krub" type="radio"><span><i></i>Krub Google font</span></label>
      </div>
      <div class="fancy-radio mb-2">
        <label><input name="font" value="font-montserrat" type="radio"
                      checked><span><i></i>Montserrat Google font</span></label>
      </div>
      <div class="fancy-radio">
        <label><input name="font" value="font-roboto" type="radio"><span><i></i>Robot Google font</span></label>
      </div>
    </div>
  </div>
  <div class="card setting_switch">
    <div class="header">
      <h2>@lang('layout.setting')</h2>
    </div>
    <ul class="list-group">
      <li class="list-group-item">
        @lang('layout.lightVersion')
        <div class="float-right">
          <label class="switch">
            <input type="checkbox" class="lv-btn">
            <span class="slider round"></span>
          </label>
        </div>
      </li>
      <li class="list-group-item">
        @lang('layout.rtlVersion')
        <div class="float-right">
          <label class="switch">
            <input type="checkbox" class="rtl-btn">
            <span class="slider round"></span>
          </label>
        </div>
      </li>
      <li class="list-group-item">
        @lang('layout.horizontalMenu')
        <div class="float-right">
          <label class="switch">
            <input type="checkbox" class="hmenu-btn">
            <span class="slider round"></span>
          </label>
        </div>
      </li>
      <li class="list-group-item">
        @lang('layout.miniSidebar')
        <div class="float-right">
          <label class="switch">
            <input type="checkbox" class="mini-sidebar-btn">
            <span class="slider round"></span>
          </label>
        </div>
      </li>
    </ul>
  </div>
  <div class="card">
    <div class="form-group">
      <label class="d-block">@lang('layout.trafficThisMonth') <span class="float-right">77%</span></label>
      <div class="progress progress-xxs">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0"
             aria-valuemax="100" style="width: 77%;"></div>
      </div>
    </div>
    <div class="form-group">
      <label class="d-block">@lang('layout.serverLoad') <span class="float-right">50%</span></label>
      <div class="progress progress-xxs">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0"
             aria-valuemax="100" style="width: 50%;"></div>
      </div>
    </div>
  </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

  @include('components.topnav')

  @include('components.search')

  @include('components.megamenu')

  @include('components.rightbar')

  @include('components.sidebar')

  <div id="main-content">
    @yield('content')
  </div>

</div>

<!-- Javascript -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/chartist.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/index2.js')}}"></script>


@yield('js')


@if($errors->any())
  @foreach($errors->all() as $error)
    <script>
      $(function () {
      // notification popup
      toastr.options.closeButton = true;
      toastr.options.positionClass = 'toast-bottom-right';
      toastr.options.showDuration = 500;
      toastr['error']('{{@$error}}');
      });
    </script>
  @endforeach
@endif
{{--@if(session()->has('msg'))--}}
  {{--<script>--}}
    {{--$(function () {--}}
      {{--// notification popup--}}
      {{--toastr.options.closeButton = true;--}}
      {{--toastr.options.positionClass = 'toast-bottom-right';--}}
      {{--toastr.options.showDuration = 500;--}}
      {{--toastr['info']('{!! session()->get('msg') !!}');--}}
    {{--});--}}
  {{--</script>--}}
{{--@endif--}}

</body>
</html>
