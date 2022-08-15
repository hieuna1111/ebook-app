<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminAuthenticate
{
  /**
   * Handle an incoming request.
   *
   * @param \Illuminate\Http\Request $request
   * @param \Closure $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if (!empty(Session::get('role'))) {

      if (Session::get('role') == 'admin')
        return $next($request);
    }
    toastr()->error('Người dùng không có quyền truy cập!', 'Authorization Error!', ['timeOut' => 3000]);
    return redirect()->route('login');
  }
}
