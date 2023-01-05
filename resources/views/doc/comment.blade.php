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
              <h2>Create Comment</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/comment/create</p>
              <pre>
{
    "frime_id" : "2",
    "content"  : "This is test content",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": "200",
    "success": {
        "msg": "Success"
    },
}
              </pre>
            </div>
          </div>
        </div>
        {{-- comments --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Get Comment</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/comments</p>
              <pre>
{
    "frime_id" : "5",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
   ...
}
              </pre>
            </div>
          </div>
        </div>
        {{-- like --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Like Comment</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/comment/like</p>
              <pre>
{
    "comment_id" : "12",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": "200",
    "success": {
        "msg": "Success"
    },
}
              </pre>
            </div>
          </div>
        </div>
        {{-- reply --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Reply Like Comment</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/comment/reply</p>
              <pre>
{
    "comment_id" : "13",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": "200",
    "success": {
        "msg": "Success"
    }
}
              </pre>
            </div>
          </div>
        </div>
        {{-- delete --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Delete Comment</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/comment/delete</p>
              <pre>
{
    "comment_id" : "13",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": "200",
    "success": {
        "msg": "Success"
    },

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