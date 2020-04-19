<?php

namespace App\Http\Controllers\Doc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocController extends Controller
{
  public function __construct()
  {

  }

  public function index()
  {
    session()->flash('msg','Successfully subscribed.');
    return view('doc.auth');
  }
  public function profile()
  {
    return view('doc.profile');
  }
  public function friend()
  {
    return view('doc.friend');

  }
  public function frime()
  {
    return view('doc.frime');
  }
  public function comment()
  {
    return view('doc.comment');

  }
  public function errors()
  {
    return view('doc.errors');
  }
}
