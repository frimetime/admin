<?php

namespace App\Http\Middleware;

use Closure;

class Manage
{

  public function handle($request, Closure $next)
  {
    if(empty(session()->get('manager'))){
      return redirect('login');
    }
    return $next($request);
  }
}
