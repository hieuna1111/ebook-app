<?php

if (!function_exists('currency_format')) {
  function currency_format($number, $suffix = 'đ')
  {
    if (!empty($number)) {
      return number_format($number, 0, ',', '.') . "{$suffix}";
    }
  }
}
?>
@extends('layouts.web')

@section('title')
  WeupBook | Checkout
@endsection

@section('content')
  <section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
      <div class="breadcrumb-contents">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('list-book')}}">Home</a></li>
            <li class="breadcrumb-item active">Checkout</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Checkout Form s-->
          @if(!empty($orders) && !$orders->isEmpty())
            <form class="checkout-form" method="post" action="{{route('place-order')}}">
              @csrf
              <div class="row row-40">
                {{--              <div class="col-12">--}}
                {{--                <h1 class="quick-title">Checkout</h1>--}}
                {{--                <!-- Slide Down Trigger  -->--}}
                {{--                <div class="checkout-quick-box">--}}
                {{--                  <p><i class="far fa-sticky-note"></i>Returning customer? <a href="javascript:"--}}
                {{--                                                                              class="slide-trigger"--}}
                {{--                                                                              data-target="#quick-login">Click--}}
                {{--                      here to login</a></p>--}}
                {{--                </div>--}}
                {{--                <!-- Slide Down Blox ==> Login Box  -->--}}
                {{--                <div class="checkout-slidedown-box" id="quick-login">--}}
                {{--                  <form action="./">--}}
                {{--                    <div class="quick-login-form">--}}
                {{--                      <p>If you have shopped with us before, please enter your details in the--}}
                {{--                        boxes below. If you are a new--}}
                {{--                        customer--}}
                {{--                        please--}}
                {{--                        proceed to the Billing & Shipping section.</p>--}}
                {{--                      <div class="form-group">--}}
                {{--                        <label for="quick-user">Username or email *</label>--}}
                {{--                        <input type="text" placeholder="" id="quick-user">--}}
                {{--                      </div>--}}
                {{--                      <div class="form-group">--}}
                {{--                        <label for="quick-pass">Password *</label>--}}
                {{--                        <input type="text" placeholder="" id="quick-pass">--}}
                {{--                      </div>--}}
                {{--                      <div class="form-group">--}}
                {{--                        <div class="d-flex align-items-center flex-wrap">--}}
                {{--                          <a href="#" class="btn btn-outlined me-3">Login</a>--}}
                {{--                          <div class="d-inline-flex align-items-center">--}}
                {{--                            <input type="checkbox" id="accept_terms" class="mb-0 mx-1">--}}
                {{--                            <label for="accept_terms" class="mb-0">I’ve read and accept--}}
                {{--                              the terms &amp; conditions</label>--}}
                {{--                          </div>--}}
                {{--                        </div>--}}
                {{--                        <p><a href="javascript:" class="pass-lost mt-3">Lost your--}}
                {{--                            password?</a></p>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </form>--}}
                {{--                </div>--}}
                {{--                <!-- Slide Down Trigger  -->--}}
                {{--                <div class="checkout-quick-box">--}}
                {{--                  <p><i class="far fa-sticky-note"></i>Have a coupon? <a href="javascript:"--}}
                {{--                                                                         class="slide-trigger"--}}
                {{--                                                                         data-target="#quick-cupon">--}}
                {{--                      Click here to enter your code</a></p>--}}
                {{--                </div>--}}
                {{--                <!-- Slide Down Blox ==> Cupon Box -->--}}
                {{--                <div class="checkout-slidedown-box" id="quick-cupon">--}}
                {{--                  <form action="./">--}}
                {{--                    <div class="checkout_coupon">--}}
                {{--                      <input type="text" class="mb-0" placeholder="Coupon Code">--}}
                {{--                      <a href="" class="btn btn-outlined">Apply coupon</a>--}}
                {{--                    </div>--}}
                {{--                  </form>--}}
                {{--                </div>--}}
                {{--              </div>--}}
                <div class="col-lg-7 mb--20">
                  <!-- Billing Address -->
                  <div id="billing-form" class="mb-40">
                    <h4 class="checkout-title">Billing Address</h4>
                    <div class="row">
                      <div class="col-md-6 col-12 mb--20">
                        <label>First Name*</label>
                        <input type="text" name="firstName" placeholder="First Name">
                        @error('firstName')
                        <div
                          class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="col-md-6 col-12 mb--20">
                        <label>Last Name*</label>
                        <input type="text" name="lastName" placeholder="Last Name">
                        @error('lastName')
                        <div
                          class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1">{{ $message }}</div>
                        @enderror
                      </div>
                      {{--                    <div class="col-12 mb--20">--}}
                      {{--                      <label>Company Name</label>--}}
                      {{--                      <input type="text" placeholder="Company Name">--}}
                      {{--                    </div>--}}
                      {{--                    <div class="col-12 col-12 mb--20">--}}
                      {{--                      <label>Country*</label>--}}
                      {{--                      <select class="nice-select">--}}
                      {{--                        <option>Bangladesh</option>--}}
                      {{--                        <option>China</option>--}}
                      {{--                        <option>country</option>--}}
                      {{--                        <option>India</option>--}}
                      {{--                        <option>Japan</option>--}}
                      {{--                      </select>--}}
                      {{--                    </div>--}}
                      {{--                    <div class="col-md-6 col-12 mb--20">--}}
                      {{--                      <label>Email Address*</label>--}}
                      {{--                      <input type="email" placeholder="Email Address">--}}
                      {{--                    </div>--}}
                      <div class="col-md-6 col-12 mb--20">
                        <label>Phone no*</label>
                        <input type="text" name="numberPhone" placeholder="Phone number">
                        @error('numberPhone')
                        <div
                          class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="col-12 mb--20">
                        <label>Address*</label>
                        <input type="text" name="address" placeholder="Address">
                        @error('address')
                        <div
                          class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1">{{ $message }}</div>
                        @enderror
                        {{--                      <input type="text" placeholder="Address line 2">--}}
                      </div>
                      <div class="col-md-6 col-12 mb--20">
                        <label>Town/City*</label>
                        <input type="text" name="town_city" placeholder="Town/City">
                        @error('town_city')
                        <div
                          class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1">{{ $message }}</div>
                        @enderror
                      </div>
                      {{--                    <div class="col-md-6 col-12 mb--20">--}}
                      {{--                      <label>State*</label>--}}
                      {{--                      <input type="text" placeholder="State">--}}
                      {{--                    </div>--}}
                      {{--                    <div class="col-md-6 col-12 mb--20">--}}
                      {{--                      <label>Zip Code*</label>--}}
                      {{--                      <input type="text" placeholder="Zip Code">--}}
                      {{--                    </div>--}}
                      {{--                    <div class="col-12 mb--20 ">--}}
                      {{--                      <div class="block-border check-bx-wrapper">--}}
                      {{--                        <div class="check-box">--}}
                      {{--                          <input type="checkbox" id="create_account">--}}
                      {{--                          <label for="create_account">Create an Acount?</label>--}}
                      {{--                        </div>--}}
                      {{--                        <div class="check-box">--}}
                      {{--                          <input type="checkbox" id="shiping_address" data-shipping>--}}
                      {{--                          <label for="shiping_address">Ship to Different Address</label>--}}
                      {{--                        </div>--}}
                      {{--                      </div>--}}
                      {{--                    </div>--}}
                    </div>
                  </div>
                  <!-- Shipping Address -->
                  {{--                <div id="shipping-form" class="mb--40">--}}
                  {{--                  <h4 class="checkout-title">Shipping Address</h4>--}}
                  {{--                  <div class="row">--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>First Name*</label>--}}
                  {{--                      <input type="text" placeholder="First Name">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>Last Name*</label>--}}
                  {{--                      <input type="text" placeholder="Last Name">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>Email Address*</label>--}}
                  {{--                      <input type="email" placeholder="Email Address">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>Phone no*</label>--}}
                  {{--                      <input type="text" placeholder="Phone number">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-12 mb--20">--}}
                  {{--                      <label>Company Name</label>--}}
                  {{--                      <input type="text" placeholder="Company Name">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-12 mb--20">--}}
                  {{--                      <label>Address*</label>--}}
                  {{--                      <input type="text" placeholder="Address line 1">--}}
                  {{--                      <input type="text" placeholder="Address line 2">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>Country*</label>--}}
                  {{--                      <select class="nice-select">--}}
                  {{--                        <option>Bangladesh</option>--}}
                  {{--                        <option>China</option>--}}
                  {{--                        <option>country</option>--}}
                  {{--                        <option>India</option>--}}
                  {{--                        <option>Japan</option>--}}
                  {{--                      </select>--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>Town/City*</label>--}}
                  {{--                      <input type="text" placeholder="Town/City">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>State*</label>--}}
                  {{--                      <input type="text" placeholder="State">--}}
                  {{--                    </div>--}}
                  {{--                    <div class="col-md-6 col-12 mb--20">--}}
                  {{--                      <label>Zip Code*</label>--}}
                  {{--                      <input type="text" placeholder="Zip Code">--}}
                  {{--                    </div>--}}
                  {{--                  </div>--}}
                  {{--                </div>--}}
                  {{--                <div class="order-note-block mt--30">--}}
                  {{--                  <label for="order-note">Order notes</label>--}}
                  {{--                  <textarea id="order-note" cols="30" rows="10" class="order-note"--}}
                  {{--                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>--}}
                  {{--                </div>--}}
                </div>
                <div class="col-lg-5">
                  <div class="row">
                    <!-- Cart Total -->
                    @if(!empty($orders))
                      <div class="col-12">
                        <div class="checkout-cart-total">
                          <h2 class="checkout-title">YOUR ORDER</h2>
                          <h4>Product <span>Total</span></h4>
                          <ul>
                            @foreach($orders as $order)
                              <li><span
                                  class="left">{{empty($order->product_name) ? "" : $order->product_name}} X {{empty($order->quantity) ? "" : $order->quantity}}</span>
                                <span
                                  class="right">{{empty($order->total_price) ? "0" : currency_format($order->total_price)}}</span>
                              </li>
                            @endforeach
                          </ul>
                          <p>Sub Total <span>{{currency_format($grandTotal)}}</span></p>
                          <p>Shipping Fee <span>00.00đ</span></p>
                          <h4>Grand Total <span>{{currency_format($grandTotal)}}</span></h4>
                          {{--                      <div class="method-notice mt--25">--}}
                          {{--                        <article>--}}
                          {{--                          <h3 class="d-none sr-only">blog-article</h3>--}}
                          {{--                          Sorry, it seems that there are no available payment methods for--}}
                          {{--                          your state. Please contact us if you--}}
                          {{--                          require--}}
                          {{--                          assistance--}}
                          {{--                          or wish to make alternate arrangements.--}}
                          {{--                        </article>--}}
                          {{--                      </div>--}}
                          {{--                      <div class="term-block">--}}
                          {{--                        <input type="checkbox" id="accept_terms2">--}}
                          {{--                        <label for="accept_terms2">I’ve read and accept the terms &--}}
                          {{--                          conditions</label>--}}
                          {{--                      </div>--}}
                          <button class="place-order w-100">Place order</button>
                        </div>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </form>
          @else
            {{--  cart null--}}
            <div class="col-lg-12 mb--20">
              <div id="billing-form" class="mb-40">
                <h4 class="checkout-title" style="display: flex !important; justify-content: center !important; ">Empty cart</h4>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </main>
@endsection
