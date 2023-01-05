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
              <li class="breadcrumb-item active" aria-current="page">Frime</li>
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
              <h4 class="mb-3">FrimeTime Api Frime</h4>
              <p class="alert alert-info">
                *All requests will be work with <a href="{{url('/doc')}}" target="_blank" style="color: red">Authentication</a>.
                You have to request with token. <br>

              </p>
            </div>
          </div>
        </div>
        {{-- create --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Create Frime</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/frime/create</p>
              <pre>
{
    "title"      : "description",
    "description": "This is test description",
    "startDate"  : "2020-03-05T03:24",
    "startTime"  : "2020-03-05T03:24",
    "max"        : "max",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code"       : "200",
    "success"    : {
        "msg"    : "Success"
    },
    "data": {
        "id"         : 18,
        "user_id"    : 7,
        "title"      : "test",
        "description": "this is test",
        "start_at"   : "2020-03-05 03:24:00",
        "max"        : 3,
        "guests"     : null,
        "created_at" : "2020-04-11T12:16:20.000000Z",
        "updated_at" : "2020-04-11T12:16:20.000000Z"
    }
}
              </pre>
            </div>
          </div>
        </div>
        {{-- update --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Update Frime</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/frime/update</p>
              <pre>
{
    "frime_id"   : 13,
    "title"      : "test frime",
    "description": "This is test description",
    "startDate"  : "2020-03-05T03:24",
    "startTime"  : "2020-03-05T03:24",
    "max"        : "max",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code"         : 200,
    "success"      : {
        "msg"      : "Success"
    },
    "data": {
        "id"          : 18,
        "user_id"     : 7,
        "title"       : "Test Frime",
        "description" : "This is Test Frime",
        "start_at"    : "2020-01-02 04:30:25",
        "max"         : "15",
        "guests"      : null,
        "created_at"  : "2020-04-11T12:16:20.000000Z",
        "updated_at"  : "2020-04-11T13:02:03.000000Z"
    }
}
              </pre>
            </div>
          </div>
        </div>
        {{-- frimes --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Frimes</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/frimes</p>
              <pre>
{
    "keyword"   : "test",
    "frime_id"  : "2",
    "status"    : "0|1|2|3|4|5",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code"   : 200,
    "success": {
        "msg": "Success"
    },
    "data": [
        {
            "id"         : 26,
            "user_id"    : 7,
            "title"      : "test",
            "description": "this is test",
            "start_at"   : "2020-03-05 03:24:00",
            "max"        : 3,
            "guests"     : null,
            "created_at" : "2020-04-11T14:04:33.000000Z",
            "updated_at" : "2020-04-11T14:04:33.000000Z"
        },
        {
            "id"         : 24,
            "user_id"    : 7,
            "title"      : "test",
            "description": "this is test",
            "start_at"   : "2020-03-05 03:24:00",
            "max"        : 3,
            "guests"     : null,
            "created_at" : "2020-04-11T14:04:31.000000Z",
            "updated_at" : "2020-04-11T14:04:31.000000Z"
        },
        {
            "id"         : 25,
            "user_id"    : 7,
            "title"      : "test",
            "description": "this is test",
            "start_at"   : "2020-03-05 03:24:00",
            "max"        : 3,
            "guests"     : null,
            "created_at" : "2020-04-11T14:04:31.000000Z",
            "updated_at" : "2020-04-11T14:04:31.000000Z"
        },
        {
            "id": 23,
            "user_id"    : 7,
            "title"      : "test",
            "description": "this is test",
            "start_at"   : "2020-03-05 03:24:00",
            "max"        : 3,
            "guests"     : null,
            "created_at" : "2020-04-11T14:04:30.000000Z",
            "updated_at" : "2020-04-11T14:04:30.000000Z"
        },

    ]
}
              </pre>
              <p class="alert alert-danger"><strong>Condition:-</strong> 1: all(actived), 2: not allowed, 3: request-all, 4:  </p>
            </div>
          </div>
        </div>
        {{-- invite --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Invite Friend to Frime</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/frime/invite</p>
              <pre>
{
    "frime_id"   : 25,
    "friend_id"  : 8,
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
        {{-- block --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Block Friend From Frime</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/frime/block</p>
              <pre>
{
    "frime_id"   : 25,
    "friend_id"  : 8,
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
        {{-- enter request --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Request Friend to Frime</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/frime/enter</p>
              <pre>
{
    "frime_id"   : 25,
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
        {{-- accept request --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Accept Request Friend</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/frime/accept</p>
              <pre>
{
    "request_id" : 11,
    "agree"      : "yes|no",
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