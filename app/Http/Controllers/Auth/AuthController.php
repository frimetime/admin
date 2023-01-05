<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Forget;
use App\SuperUser;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
  public function __construct()
  {

  }
//register
  public function register_view()
  {
    return view('authentication.register');
  }

  //unable register
  public function unable_register(){
    return view('authentication.unable_register');
  }

  public function register(Request $request)
  {
    $data = $request->validate([
      'name'     => 'required|unique:super_users',
      'email'    => 'required|email|unique:super_users',
      'password' => 'required|confirmed|min:8'
    ]);
    try{
      $data['role'] = 1;
      SuperUser::create($data);
      session()->put('manager',$data);
      return redirect('/');
    }catch (QueryException $e){
      dd($e);
    }
  }
//login
  public function login_view()
  {
    return view('authentication.login');
  }

  public function login(Request $request)
  {
    $data = $request->validate([
      'user'     => 'required',
      'password' => 'required|min:8'
    ]);
    $user = SuperUser::where(['email' => $data['user']])->get()->first();
    if (empty($user)){
      $user = SuperUser::where(['name' => $data['user']])->get()->first();
    }
    if (empty($user)){
      return redirect()->back()->withErrors(['wrong',['user or password is not correct.']]);
    }
    if (Hash::check($data['password'],$user->password)){
      session()->put('manager',$user);
      if ($user->role !== 1){
        return redirect('/doc');
      }
      return redirect('/');
    }else{
      return redirect()->back()->withErrors(['Account error!',['user or password is not correct.']]);
    }
  }
//forget
  public function forget_view()
  {
    return view('authentication.forget');
  }

  public function forget(Request $request)
  {
    $data = $request->validate([
      'email' => 'required|email',
    ]);

    $super_user = SuperUser::where(['email' => $data['email']])->get()->first();
    if (!empty($super_user)){
      $code = $this->create_verify_code();
      $super_user->verify_token = $code;
      $super_user->save();
      Mail::to($super_user->email)->send(new Forget($super_user));
      $notification = [
        'type' => 'success',
        'header' => 'Successfully sent.',
        'msg'  => 'We sent email to your email account. If you can\'t find, please see on junk box.'
      ];
      return redirect('/login')->withErrors(['Success!',['We sent email to your email.']]);
    }else{
      return redirect()->back()->withErrors(['Request Error!',['email is not registered.']]);
    }
  }

  public function reset(Request $request)
  {
    $user = \session()->get('manager');
    if (!empty($user['id'])){
      $user = SuperUser::where(['id'=>$user['id']])->get()->first();
      $token = $this->create_verify_code();
      $user->verify_token = $token;
      $user->save();
      return view('authentication.reset',compact('token'));
    }else{
      return redirect('/login');
    }

  }

  public function reset_with_token($token)
  {
    $super_user = SuperUser::where(['verify_token'=>$token])->get()->first();
    if (empty($super_user)){
      return redirect('login')->withErrors(['Token Error!',['verify_token was expired.']]);
    }
    return view('authentication.reset',compact('token'));
  }

  public function reset_check(Request $request, $token)
  {
    $data = $request->validate([
      'password' => 'required|min:8|confirmed',
    ]);
    $user = SuperUser::where(['verify_token'=>$token])->get()->first();
    $user->password = $data['password'];
    $user->verify_token = $this->create_verify_code();
    $user->save();
    return redirect('login');
  }
//logout
  public function logout()
  {
    session()->pull('manager');
    return redirect('/login');
  }

  public function create_verify_code()
  {
    $token = Str::random(60);
    $token = hash('sha256', $token);
    return $token;
  }
}
