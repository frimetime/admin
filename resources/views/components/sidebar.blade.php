<div id="left-sidebar" class="sidebar">
  <div class="navbar-brand">
    <a href="{{asset('/')}}"><img src="{{asset('image/logo/logo-light.png')}}" alt="{{env('APP_NAME', false)}} Logo" class="img-fluid logo"><span>{{env('APP_NAME', false)}}</span></a>
    <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
  </div>
  <div class="sidebar-scroll">
    <div class="user-account">
      <div class="user_div">
        @if(!empty(session()->get('manage')['image']))
          <img src="{{asset(session()->get('manager')['image'])}}" class="user-photo" alt="User Profile Picture">
        @else
          <img src="{{asset('image/profile/avartar.jpg')}}" class="user-photo" alt="User Profile Picture">
        @endif
      </div>
      <div class="dropdown">
        <span>Welcome,</span>
        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{'@'.session()->get('manager')['name']}}</strong></a>
        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
          <li><a href="#"><i class="icon-user"></i>@lang('layout.profile')</a></li>
          <li class="divider"></li>
          <li><a href="{{route('logout')}}"><i class="icon-power"></i>@lang('layout.logout')</a></li>
        </ul>
      </div>
    </div>
    <nav id="left-sidebar-nav" class="sidebar-nav">
      <ul id="main-menu" class="metismenu">
        @if(!empty(session()->get('manager')['role'] == 1))
          <li class="header">@lang('layout.main')</li>
          <li class="active open"><a href="#"><i class="icon-speedometer"></i><span>@lang('layout.dashboard')</span></a></li>
          <li class="header">@lang('layout.users')</li>
          <li>
            <a href="#Contact" class="has-arrow"><i class="icon-book-open"></i><span>Contact</span></a>
            <ul>
              <li><a href="app-contact.html">List View</a></li>
              <li><a href="app-contact2.html">Grid View</a></li>
            </ul>
          </li>
        @endif
        <li>
          <a href="{{url('/doc')}}" class="has-arrow"><i class="icon-doc"></i><span>@lang('layout.documentation')</span></a>
          <ul>
            <li><a href="{{url('/doc')}}">Authentication</a></li>
            <li><a href="{{url('/doc/profile')}}">Profile</a></li>
            <li><a href="{{url('/doc/friend')}}">Friend</a></li>
            <li><a href="{{url('/doc/frime')}}">Frime</a></li>
            <li><a href="{{url('/doc/comment')}}">Comment</a></li>
            <li><a href="{{url('/doc/errors')}}">Errors</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>