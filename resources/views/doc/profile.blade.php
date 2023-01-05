@extends('layouts.layout')

@section('css')

@endsection

@section('content')
  <div>
    <div class="block-header">
      <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
          <h1>Documentation</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Api Docmentation</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right hidden-xs">
          <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-round" title="">Get Support</a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row clearfix">
        <div class="col-sm-12">
          <div class="card" id="documenter_cover">
            <div class="body">
              <h4 class="mb-3">FrimeTime Api Profile</h4>
              <p>
                All requests will be work with <a href="{{url('/doc')}}" target="_blank" style="color: red">Authentication</a>.
                You have to request with token. <br>

              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>My Profile</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/profile</p>
              <pre>
{
    no params
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "Success"
    },
    "data": {
        "id": 1,
        "username": "test",
        "email": "test@test.com",
        "role": "male",
        "firstname": "test",
        "lastname": "test",
        "description": "I am a developer.",
        "image": "uploads/profile/1586272317.jpeg",
        "country": "China",
        "city": "JinZhou",
        "birthday": "1995-01-07",
        "created_at": "2020-04-06T15:20:51.000000Z",
        "updated_at": "2020-04-08T12:39:25.000000Z"
    }
}
              </pre>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Profile Update</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/update_profile</p>
              <pre>
{
    "username"    : "New username",
    "firstname"   : "Your first name",
    "lastname"    : "Your lastname",
    "description" : "description",
    "country"     : "China",
    "city"        : "JinZhou",
    "birthday"    : "1994-03-23",
    "image"       : "image (File upload)",
    "firstname" : "firstname",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "Success"
    },
    "data": {
        "id": 1,
        "username": "test",
        "email": "test@test.com",
        "role": "male",
        "firstname": "test",
        "lastname": "test",
        "description": "I am a developer.",
        "image": "uploads/profile/1586272317.jpeg",
        "country": "China",
        "city": "JinZhou",
        "birthday": "1995-01-07",
        "created_at": "2020-04-06T15:20:51.000000Z",
        "updated_at": "2020-04-08T12:39:25.000000Z"
    }
}
              </pre>
              <p class="alert alert-danger"><strong>NOTE:-</strong> Each params can work alone without other fields.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Account Delete</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/delete_account</p>
              <pre>
{
    no params
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "Success"
    }
}
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')

@endsection