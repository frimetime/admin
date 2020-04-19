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
              <li class="breadcrumb-item active" aria-current="page">Auth</li>
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
              <h4 class="mb-3">FrimeTime Api Auth</h4>
              <p>All requests are supported by https protocol. Auth is based in
                <a href="https://jwt.io/introduction/" target="_blank">JWT</a> Authentication system.</p>
              <table class="table table-responsive">
                <tbody>
                <tr>
                  <td>Url:</td>
                  <td><a href="http://frimetime.com" target="_blank"> https://www.frimetime.com</a></td>
                </tr>
                <tr>
                  <td>Test User:</td>
                  <td>test</td>
                </tr>
                <tr>
                  <td>Password:</td>
                  <td>admin</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Register User</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/register</p>
              <pre>
{
    "username":  "test"
    "email":     "test@test.com"
    "password":  "testaccount"
    "role":      "male"
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "Successfully registered. We sent verify email. If you can't find email, please check junk mail box."
    }
}
              </pre>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Verify</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/verify</p>
              <pre>
{
  "user"    : "test",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "We sent email. If you can't see email, please check on junk box."
    }
}
              </pre>

            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Login</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/login</p>
              <pre>
{
    "user"    : "test",
    "password": "testaccount"
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9ds
              eyJpc3MiOiJodHRwOlwvXC9mcmltZXRpbWUuY2
              9tXC9hcGlcL2xvZ2luIiwiaWF0IjoxNTg2MzQ5
              OTg2LCJleHAiOjE1ODYzNTM1ODYsIm5iZiI6MT
              U4NjM0OTk4NiwianRpIjoiM2tPN2JmcFd3Q0xS
              WENiZyIsInN1YiI6MSwicHJ2IjoiODdlMGFmMW
              VmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1
              NDZhYSJ9.KbTxn9Fss1--hvq9fB_bsiz7KMXRG
              ",
    "expire": 3600
}
              </pre>

            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Forget Password</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/forget</p>
              <pre>
{
    "user"    : "test",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "We sent email. If you can't see email, please check on junk box."
    }
}
              </pre>

            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Reset Password</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/reset</p>
              <pre>
{
    "password" : "Your new_password",
    "password_confirmation" : "password_confirm",
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "success": {
        "msg": "Success."
    }
}
              </pre>
              <p class="alert alert-danger"><strong>NOTE:-</strong> Authentication is required</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card" id="features">
            <div class="header">
              <h2>Refresh token</h2>
            </div>
            <div class="body">
              <h5>request</h5>
              <p class="alert alert-warning">url: /api/refresh</p>
              <pre>
{
  No params
}
              </pre>
              <h5>Success</h5>
              <pre>
{
    "code": 200,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9ds
              eyJpc3MiOiJodHRwOlwvXC9mcmltZXRpbWUuY2
              9tXC9hcGlcL2xvZ2luIiwiaWF0IjoxNTg2MzQ5
              OTg2LCJleHAiOjE1ODYzNTM1ODYsIm5iZiI6MT
              U4NjM0OTk4NiwianRpIjoiM2tPN2JmcFd3Q0xS
              WENiZyIsInN1YiI6MSwicHJ2IjoiODdlMGFmMW
              VmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1
              NDZhYSJ9.KbTxn9Fss1--hvq9fB_bsiz7KMXRG
              ",
    "expire": 3600
}
              </pre>
              <p class="alert alert-danger"><strong>NOTE:-</strong> Authentication is required</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')

@endsection