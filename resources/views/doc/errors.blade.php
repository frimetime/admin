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
              <li class="breadcrumb-item active" aria-current="page">Errors</li>
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
              <h4 class="mb-3">API Errors</h4>
              <p class="alert alert-info">
                Api errors are contained in 400(required), 422(request type error)
              </p>
            </div>
          </div>
        </div>
        {{-- required --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Required error</h2>
            </div>
            <div class="body">
              <h5>Required error</h5>
              <p class="alert alert-warning">code: 400</p>
              <pre>
{
    "code"  : 400,
    "error" : [
      !key! : "!key! is required field."
    ],
}
              </pre>
            </div>
          </div>
        </div>
        {{-- request error --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Request error</h2>
            </div>
            <div class="body">
              <h5>Request error</h5>
              <p class="alert alert-warning">code: 422</p>
              <pre>
{
    "code"  : 422,
    "error" : [
      "msg" : "!!message content!!"
    ],
}
              </pre>
            </div>
          </div>
        </div>
        {{-- server error --}}
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Server error</h2>
            </div>
            <div class="body">
              <h5>Server error</h5>
              <p class="alert alert-warning">code: 500</p>
              <pre>
{
    "code"  : 500,
    "error" : [
      "msg" : "Server error."
    ],
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