@extends('layouts.auth')

@section('css')

@endsection

@section('content')
  <div class="card">
    <div class="body">
      <p class="lead" style="letter-spacing: 2px"><i class="fa fa-lock"> </i> @lang('auth.loginTitle')</p>
      <form class="form-auth-small m-t-20" method="post" action="{{route('login')}}">
        @csrf
        <div class="form-group">
          <label for="email" class="control-label sr-only">@lang('auth.email')</label>
          <input type="text"
                 class="form-control round"
                 id="email"
                 name="user"
                 value="{{ old('user') }}"
                 placeholder="@lang('auth.email')">
        </div>
        <div class="form-group">
          <label for="password" class="control-label sr-only">@lang('auth.password')</label>
          <input type="password"
                 class="form-control round"
                 id="password"
                 name="password"
                 autocomplete="current-password"
                 placeholder="Password">
        </div>
        <div class="form-group">
          @if($errors->any())
            @foreach($errors->all() as $error)
              <P style="margin-bottom: 0"><span class="" style="color: red;font-size: 14px; text-transform: none; font-weight: 300;">{{@$error}}</span></P>
            @endforeach
          @endif
        </div>
        <div class="form-group clearfix">
          <label class="fancy-checkbox element-left">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="border-radius: 50%">
            <span>@lang('auth.remember_me')</span>
          </label>
        </div>
        <button type="submit" class="btn btn-round btn-primary m-0" style="letter-spacing: 3px;">
          @lang('auth.login')
        </button>
        <div class="bottom">
          <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{url('/forget')}}"> @lang('auth.forgetPassword')</a></span>
          <span>Don't have an account? <a href="{{url('/register')}}">@lang('auth.register')</a></span>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('js')

@endsection