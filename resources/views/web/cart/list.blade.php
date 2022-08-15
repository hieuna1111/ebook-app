<?php
$arrayCart = array();
?>

@extends('layouts.web')

@section('title')
  WeupBook | Cart
@endsection

@section('content')
  <section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
      <div class="breadcrumb-contents">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/book/list">Home</a></li>
            <li class="breadcrumb-item active">Cart</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!-- Cart Page Start -->
  <main class="cart-page-main-block inner-page-sec-padding-bottom">
    <div class="cart_area cart-area-padding  ">
      <div class="container">
        <div class="page-section-title">
          <h1>Shopping Cart</h1>
        </div>
        <div class="row">
          <div class="col-12">
            <form id="update_cart" action="{{route('get-check-out')}}" method="get">
              <!-- Cart Table -->
              <div class="cart-table table-responsive mb--40">
                <table class="table">
                  <!-- Head Row -->
                  <thead>
                  <tr>
                    <th class="pro-remove"></th>
                    <th class="pro-thumbnail">Image</th>
                    <th class="pro-title">Product</th>
                    <th class="pro-price">Price</th>
                    <th class="pro-quantity">Quantity</th>
                    <th class="pro-subtotal">Total</th>
                    <th ></th>
                  </tr>
                  </thead>
                  <tbody>
                  <!-- Product Row -->
                  @if(!empty($orders) && !$orders->isEmpty())
                    @foreach($orders as $order)
                      <tr>
                        <td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
                        </td>
                        <td class="pro-thumbnail">
                          <a href="#">
                            <img
                              id="image_id_{{$order->id}}"
                              src="{{ empty($order->cover_image) ? "/web/image/products/product-2.jpg" : $order->cover_image }}"
                              alt="" style="width: 100% !important;">
                          </a></td>
                        <input type="hidden" value="{!! $order->price !!}" id="price_id_{{$order->id}}"/>
                        <td class="pro-title"><a id="name_id_{{$order->id}}"
                            href="#">{{empty($order->product_name) ? "Chưa đặt tên sách" : $order->product_name}}</a>
                        </td>
                        <td class="pro-price"><span>{{empty($order->price) ? 100000 : $order->price}}</span></td>
                        <td class="pro-quantity">
                          <div class="pro-qty">
                            <div class="count-input-block">
                              <input id="quantity_{{$order->id}}" type="number" class="form-control text-center" name="quantity"
                                     onchange="updateQuantity('{{$order->id}}')"
                                     value="{!! empty($order->quantity) ? 1 : $order->quantity !!}">
                            </div>
                          </div>
                        </td>
                        <td class="pro-subtotal">
                          <span id="total_price_{{$order->id}}">{{empty($order->total_price) ? 100000 : $order->total_price}}</span></td>
                        <td>
                          <div class="update-block text-right">
                            <input onclick="updateCart('{{$order->id}}')"
                                   href="{{route('ajax-update-cart', $order->id)}}"
                                    id="update_id_{{$order->id}}"
                                   value="Update" class="btn btn-outlined">
                          </div>
                        </td>

                      </tr>
                    @endforeach
                  @endif
                  <!-- Discount Row  -->
                  <tr>
                    <td colspan="12" class="actions">
                      {{--                      <div class="coupon-block">--}}
                      {{--                        <div class="coupon-text">--}}
                      {{--                          <label for="coupon_code">Coupon:</label>--}}
                      {{--                          <input type="text" name="coupon_code" class="input-text"--}}
                      {{--                                 id="coupon_code" value="" placeholder="Coupon code">--}}
                      {{--                        </div>--}}
                      {{--                        <div class="coupon-btn">--}}
                      {{--                          <input type="submit" class="btn btn-outlined"--}}
                      {{--                                 name="apply_coupon" value="Apply coupon">--}}
                      {{--                        </div>--}}
                      {{--                      </div>--}}
                      <div class="update-block text-right">
                        <input type="submit" class="btn btn-outlined" value="Check out">
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  function updateQuantity (id) {
    let price = $('#price_id_' + id).val();
    let quantity = $('#quantity_' + id).val();
    // console.log(price * quantity)
    return price * quantity;
  }
  function updateCart (id) {
    $('#update_id_'+id).click(function (e) {
      e.preventDefault();
      let totalPrice = updateQuantity(id);
      $('#total_price_'+id).text(totalPrice);

      let name = $('#name_id_' + id).html();
      let image = $('#image_id_' + id).attr('src');
      let price = $('#price_id_' + id).val();
      let quantity = $('#quantity_' + id).val();
      let href = $('#update_id_'+id).attr('href');
      // console.log(href)
      $.ajax(href, {
        data: {
          id: id,
          name: name,
          image: image,
          quantity: quantity,
          price: price,
          totalPrice: totalPrice
        }
      }).done(function (results) {
        console.log(results)
      })
    })
  }
</script>
