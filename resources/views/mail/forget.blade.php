@component('mail::message')
  <div>
    <h1>Reset your password</h1>
    <p>
      Seems like you forgot your password for FRIMETIME. If this is true, click below to reset your password.
    </p>
    <p>If you received this email by mistake, simply delete it.</p>
    <p style="text-align: center; margin-top: 30px">
      <a href="{{env('APP_URL')}}/reset/{{@$user->verify_token}}"
         style="padding: 10px 15px; color:white; background: red;text-decoration: none; margin-left: auto; margin-right: auto">
        Reset Password
      </a>
    </p>
    <h5 style="margin-top: 30px">Thanks</h5>
    <p>The FRIMETIME Team</p>
    <hr>
    <p>If you’re having trouble clicking the button, copy and paste the URL below into your web browser.</p>
    <a>{{env('APP_URL')}}/reset/{{@$user->verify_token}}</a>
  </div>
@endcomponent