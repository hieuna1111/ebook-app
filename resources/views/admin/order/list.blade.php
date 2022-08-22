<?php
if (!function_exists('currency_format')) {
  function currency_format($number, $suffix = 'đ') {
    if (!empty($number)) {
      return number_format($number, 0, ',', '.') . "{$suffix}";
    }
    return 0;
  }
}
?>

@extends('layouts.admin')

@section('title')
  Admin | Orders
@endsection

@section('content')
  <div class="container-fluid">
    <div class="page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Product Order</a></li>
      </ol>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-responsive-lg mb-0">
                <thead>
                <tr>
                  <th class="align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkAll">
                      <label class="custom-control-label" for="checkAll"></label>
                    </div>
                  </th>
                  <th class="align-middle">Order</th>
                  <th class="align-middle pr-7">Date</th>
                  <th class="align-middle" style="min-width: 12.5rem;">Ship To</th>
                  <th class="align-middle text-center">Status</th>
                  <th class="align-middle text-right">Amount</th>
                  <th class="no-sort"></th>
                </tr>
                </thead>
                <tbody id="orders">
                @if(!empty($orders) && !$orders->isEmpty())
                  @foreach($orders as $order)
                    <tr class="btn-reveal-trigger">
                      <td class="py-2">
                        <div class="custom-control custom-checkbox checkbox-success">
                          <input type="checkbox" class="custom-control-input" id="checkbox">
                          <label class="custom-control-label" for="checkbox"></label>
                        </div>
                      </td>
                      <td class="py-2">
                        <a href="#">
                          <strong>#{{empty($order->order_no) ? "#" : $order->order_no}}</strong></a> by
                        <strong>
                          {{empty($order->first_name) ? "sample" : $order->first_name}} {{empty($order->last_name) ? "user" : $order->last_name}}
                        </strong><br/><a
                          href="#"><span class="__cf_email__"
                                         data-cfemail="#">{{empty($order->user_email) ? "sample@gmail.com" : $order->user_email}}</span></a>
                      </td>
                      <td class="py-2">{{empty($order->date_time) ? "YYYY/MM/DD HH:ms:ss" : $order->date_time}}</td>
                      <td class="py-2">{{empty($order->address) ? "sample address" : $order->address}}
                        <p
                          class="mb-0 text-500">{{empty($order->town_city) ? "sample town/city" : $order->town_city}}</p>
                      </td>
                      @if(!empty($order->status))
                        @if($order->status == \App\Enums\OrderStatus::Draft)
                          <td class="py-2 text-right"><span class="badge badge-warning">Draft<span
                                class="ml-1 fas fa-stream"></span></span>
                          </td>
                        @endif
                        @if($order->status == \App\Enums\OrderStatus::Pending)
                          <td class="py-2 text-right"><span class="badge badge-primary">Pending<span
                                class="ml-1 fa fa-redo"></span></span>
                          </td>
                        @endif
                        @if($order->status == \App\Enums\OrderStatus::Success)
                          <td class="py-2 text-right"><span class="badge badge-success">Success<span
                                class="ml-1 fa fa-check"></span></span>
                          </td>
                        @endif
                        @if($order->status == \App\Enums\OrderStatus::Failure)
                          <td class="py-2 text-right"><span class="badge badge-secondary">Failure<span class="ml-1 fa fa-ban"></span></span>
                          </td>
                        @endif
                      @endif
                      <td class="py-2 text-right">
                        {{empty($order->total_price) ? currency_format(0) : currency_format($order->total_price)}}
                      </td>
                      <td class="py-2 text-right">
                        <div class="dropdown text-sans-serif">
                          <button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0"
                                  data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                                  aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                   xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                   width="18px"
                                                                   height="18px" viewBox="0 0 24 24" version="1.1"><g
                                  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0"
                                                                                                       width="24"
                                                                                                       height="24"></rect><circle
                                    fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12"
                                                                                         cy="12"
                                                                                         r="2"></circle><circle
                                    fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0"
                               aria-labelledby="order-dropdown-0">
                            <div class="py-2">
                              <a class="dropdown-item" href="/admin/order/{{$order->_id}}/success">Success</a>
{{--                              <a class="dropdown-item" href="#!">Processing</a>--}}
{{--                              <a class="dropdown-item" href="#!">On Hold</a>--}}
{{--                              <a class="dropdown-item" href="#!">Pending</a>--}}
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-danger" href="/admin/order/{{$order->_id}}/failure">Failure</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
