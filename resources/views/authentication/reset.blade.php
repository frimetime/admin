@extends('layouts.auth')

@section('css')

@endsection

@section('content')
  <div class="card forgot-pass">
    <div class="body">
      <p>Type new password to recover password.</p>
      <form class="form-auth-small" action="{{route('reset', $token)}}" method="post">
        @csrf
        <div class="form-group">
          <input type="password" class="form-control round" id="password" name="password" placeholder="New Password">
        </div>
        <div class="form-group">
          <input type="password" class="form-control round" id="password-confirmation" name="password_confirmation" placeholder="Password confirm">
        </div>
        <div class="form-group">
          @if($errors->any())
            @foreach($errors->all() as $error)
              <P style="margin-bottom: 0"><span class="" style="color: red;font-size: 14px; text-transform: none; font-weight: 300;">{{@$error}}</span></P>
            @endforeach
          @endif
        </div>
        <button type="submit" class="btn btn-round btn-primary btn-lg">RESET PASSWORD</button>
        <div class="bottom">
          <span class="helper-text">Know your password? <a href="{{url('/login')}}">Login</a></span>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('js')

@endsection