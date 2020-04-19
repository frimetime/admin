@extends('layouts.auth')

@section('css')

@endsection

@section('content')
  <div class="card">
    <div class="body">
      <p class="lead"><i class="fa fa-users"> </i> @lang('auth.registerTitle')</p>
      <form class="form-auth-small m-t-20" method="post" action="{{route('register')}}">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control round" placeholder="Your name" name="name" value="">
        </div>
        <div class="form-group">
          <input type="text" class="form-control round" placeholder="Your email" name="email" value="">
        </div>
        <div class="form-group">
          <input type="password" class="form-control round" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <input type="password" class="form-control round" placeholder="Password confirm" name="password_confirmation">
        </div>
        <div class="form-group">
          @if($errors->any())
            @foreach($errors->all() as $error)
              <P style="margin-bottom: 0"><span class="" style="color: red;font-size: 14px; text-transform: none; font-weight: 300;">{{@$error}}</span></P>
            @endforeach
          @endif
        </div>
        <button type="submit" class="btn btn-primary btn-round m-0">@lang('auth.register')</button>
      </form>
      <div class="bottom mt-2">
        <span>@lang('auth.register_substring')<a href="{{url('/login')}}"> @lang('auth.login')</a></span>
      </div>
    </div>
  </div>
@endsection

@section('js')

@endsection