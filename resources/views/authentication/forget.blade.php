@extends('layouts.auth')

@section('css')

@endsection

@section('content')
  <div class="card forgot-pass">
    <div class="body">
      <p class="lead mb-3"><strong>Oops</strong>,<br> forgot something?</p>
      <p>Type email to recover password.</p>
      <form class="form-auth-small" action="{{route('forget')}}" method="post">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control round" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group">
          @if($errors->any())
            @foreach($errors->all() as $error)
              <P style="margin-bottom: 0"><span class="" style="color: red;font-size: 14px; text-transform: none; font-weight: 300;">{{@$error}}</span></P>
            @endforeach
          @endif
        </div>
        <button type="submit" class="btn btn-round btn-primary btn-lg"><i class="fa fa-send-o"> </i> @lang('auth.send')</button>
        <div class="bottom">
          <span class="helper-text">Know your password? <a href="{{url('/login')}}">Login</a></span>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('js')

@endsection