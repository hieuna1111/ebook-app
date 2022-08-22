<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\PendingOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
  public function index()
  {
    $orders = PendingOrder::query();
    $orders = $orders->where('status', '!=', OrderStatus::Draft)->orderByDesc('order_no')->get();

    return view('admin.order.list')->with('orders', $orders);
  }

  public function orderSuccess($id): \Illuminate\Http\RedirectResponse
  {
    $order = DB::collection('pending_orders')->where('_id', $id)->first();
    if ($order['status'] == OrderStatus::Pending) {
      DB::collection('pending_orders')->where('_id', $id)->update(['status' => OrderStatus::Success]);
      $order = DB::collection('pending_orders')->where('_id', $id)->first();

      $dateTime = date('F', strtotime($order['date_time']));

      $orderChart = DB::collection('orders')->where('inMonth', $dateTime)->first();

      $array = [
        'product_name' => $order['product_name'],
        'quantity' => (int)$order['quantity'],
        'price' => floatval($order['price']),
        'total' => floatval($order['total_price'])
      ];

      $length = array_push($orderChart['products'], $array);

      DB::collection('orders')->where('inMonth', $dateTime)->update(['products' => $orderChart['products']]);
    }
    return redirect()->route('orders');
  }

  public function orderFailure($id)
  {
    $order = DB::collection('pending_orders')->where('_id', $id)->first();
    if ($order['status'] == OrderStatus::Pending) {
      DB::collection('pending_orders')->where('_id', $id)->update(['status' => OrderStatus::Failure]);
    }
    return redirect()->route('orders');
  }

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
