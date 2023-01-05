@extends('layouts.auth')

@section('css')

@endsection

@section('content')
  <div class="card">
    <div class="body">
      <p class="lead"><i class="fa fa-users"> </i> @lang('auth.registerTitle')</p>
      <div class="row pt-4 pb-4">
        <div class="col-md-12">
          <p style="text-align: center; color: red">You can't register.</p>
          <p style="text-align: center; color: red">Register is disabled.</p>
        </div>
      </div>

        {{--<div class="form-group">--}}
          {{--<input type="text" class="form-control round" placeholder="Your name" name="name" value="">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
          {{--<input type="text" class="form-control round" placeholder="Your email" name="email" value="">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
          {{--<input type="password" class="form-control round" placeholder="Password" name="password">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
          {{--<input type="password" class="form-control round" placeholder="Password confirm" name="password_confirmation">--}}
        {{--</div>--}}

        <button type="submit" class="btn btn-primary btn-round m-0">@lang('auth.register')</button>

      <div class="bottom mt-2">
        <span>@lang('auth.register_substring')<a href="{{url('/login')}}"> @lang('auth.login')</a></span>
      </div>
    </div>
  </div>
@endsection

@section('js')

@endsection