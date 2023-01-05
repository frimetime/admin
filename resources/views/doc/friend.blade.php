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
              <li class="breadcrumb-item active" aria-current="page">Friend</li>
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
              <h4 class="mb-3">FrimeTime Api Friend</h4>
              <p class="alert alert-info">
                *All requests will be work with <a href="{{url('/doc')}}" target="_blank" style="color: red">Authentication</a>.
                You have to request with token. <br>

              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Users</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/users</p>
              <pre>
{
    "country": "china",
    "city"   : "ji",
    "keyword": "test",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "Success"
    },
    "data": [
        {
            "id": 4,
            "image": "uploads/profile/158623454080.png",
            "username": "inhe"
        },
        {
            "id": 5,
            "image": "uploads/profile/158623408230.png",
            "username": "user"
        },
        {
            "id": 6,
            "image": "uploads/profile/1586234082340.png",
            "username": "user1"
        },
        {
            "id": 7,
            "image": "uploads/profile/158123623472080.png",
            "username": "user2"
        },
        {
            "id": 8,
            "image": "uploads/profile/1586234234080.png",
            "username": "user3"
        },
        {
            "id": 9,
            "image": null,
            "username": "user4"
        }
    ]
}
              </pre>
              <p class="alert alert-danger"><strong>NOTE:-</strong> When there is not filter option, all users will be got.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Invite Friend</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/friend/invite</p>
              <pre>
{
    "friend_id" : "24",
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
        "invite_id": 16
    }
}
              </pre>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Invite Friend Accept</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/friend/invite_accept</p>
              <pre>
{
    "invite_id" : "23",
    "accept"    : "yes or no",
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
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Get Friends</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/friends</p>
              <pre>
{
    "condition"    : 1,
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "Success"
    },
    "data": [
        {
            "id": 9,
            "image": null,
            "username": "user4"
        },
        {
            "id": 5,
            "image": null,
            "username": "user"
        }
    ]
}
              </pre>
              <p class="alert alert-danger"><strong>NOTE:- </strong>
                <span style="color: #dd1144;"> null: all friends, </span>
                <span style="color: green;"> 1: invited all, </span>
                <span style="color: blue"> 2: invite all </span></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Block Friend</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/friend/block</p>
              <pre>
{
    "block_id"    : 3,
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
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Unblock Friend</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/friend/unblock</p>
              <pre>
{
    "block_id"    : 3,
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