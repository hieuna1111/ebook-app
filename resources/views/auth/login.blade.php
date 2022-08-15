@extends('layouts.web')

@section('title')
  WeupBook | Login
@endsection

@section('content')
  <main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
      <div class="row">
{{--        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">--}}
{{--          <!-- Login Form s-->--}}
{{--          <form action="#">--}}
{{--            <div class="login-form">--}}
{{--              <h4 class="login-title">New Customer</h4>--}}
{{--              <p><span class="font-weight-bold">I am a new customer</span></p>--}}
{{--              <div class="row">--}}
{{--                <div class="col-md-12 col-12 mb--15">--}}
{{--                  <label for="email">Full Name</label>--}}
{{--                  <input class="mb-0 form-control" type="text" id="name"--}}
{{--                         placeholder="Enter your full name">--}}
{{--                </div>--}}
{{--                <div class="col-12 mb--20">--}}
{{--                  <label for="email">Email</label>--}}
{{--                  <input class="mb-0 form-control" type="email" id="email" placeholder="Enter Your Email Address Here..">--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 mb--20">--}}
{{--                  <label for="password">Password</label>--}}
{{--                  <input class="mb-0 form-control" type="password" id="password" placeholder="Enter your password">--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 mb--20">--}}
{{--                  <label for="password">Repeat Password</label>--}}
{{--                  <input class="mb-0 form-control" type="password" id="repeat-password" placeholder="Repeat your password">--}}
{{--                </div>--}}
{{--                <div class="col-md-12">--}}
{{--                  <a href="#" class="btn btn-outlined">Register</a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </form>--}}
{{--        </div>--}}
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
          <form action="{{route('sign-in')}}" method="POST">
            @csrf
            <div class="login-form">
              <h4 class="login-title">Login</h4>
              <p><span class="font-weight-bold">With role is admin</span></p>
              <div class="row">
                <div class="col-md-12 col-12 mb--15">
                  <label for="email">Enter your email address here...</label>
                  <input class="mb-0 form-control" type="email" id="email1"
                         name="email"
                         placeholder="Enter you email address here...">
                </div>
                <div class="col-12 mb--20">
                  <label for="password">Password</label>
                  <input class="mb-0 form-control" type="password"
                         name="password"
                         id="login-password" placeholder="Enter your password">
                </div>
                <div class="col-md-12">
                  <button type="submit" href="#" class="btn btn-outlined">Login</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection
