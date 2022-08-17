<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

  public function index()
  {
    session()->pull('role');
    return view('auth.login');
  }

  public function signIn(Request $request)
  {
    $data = $request->all();

    $infoAdmin = DB::collection('users')->where('email', $request['email'])->first();
    if (!$infoAdmin) {
      toastr()->error('Tài khoản hoặc mật khẩu không đúng', 'Đăng nhập thất bại!');
      return redirect('/login');
    }
    if ($infoAdmin['password'] == $request['password'] && $infoAdmin['role'] == 'admin') {
      session(['role' => 'admin']);
      return redirect()->route('admin-list-book');
    }
    if ($infoAdmin['password'] == $request['password'] && $infoAdmin['role'] == 'user') {
      session(['role' => 'user']);
      session(['email_login' => $request['email']]);
      toastr()->success('Đăng nhập thành công!');
      return redirect()->route('list-book')->with('message', 'Đăng nhập thành công');
    }

    toastr()->error('Tài khoản hoặc mật khẩu không đúng', 'Login failure!');
    return redirect('/login');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
