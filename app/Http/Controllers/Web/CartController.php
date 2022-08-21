<?php

namespace App\Http\Controllers\Web;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\PendingOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
  public function index(Request $request)
  {
    $orders = PendingOrder::all();
//    $orders1 = DB::collection('pending_orders')
//      ->where('user_email', Session::get('email_login'))
//      ->where('status', 'pending')
//      ->get();

    $orders2 = PendingOrder::query();
    $orders2 = $orders2
      ->where('user_email', Session::get('email_login'))
      ->where('status', OrderStatus::Draft)
      ->get();

    return view('web.cart.list')->with('orders', $orders2);
  }

  public function update(Request $request, $id): \Illuminate\Http\JsonResponse
  {
    $data = $request->all();
    $order = [
      'product_name' => $data['name'],
      'cover_image' => $data['image'],
      'price' => floatval($data['price']),
      'quantity' => (int)$data['quantity'],
      'total_price' => floatval($data['totalPrice']),
      'user_email' => empty(Session::get('email_login')) ? null : Session::get('email_login'),
      'status' => OrderStatus::Draft
    ];
    DB::collection('pending_orders')->where('_id', $id)->update($order);
    return response()->json(['data' => $order]);
  }

  public function checkout() {
    $orders = PendingOrder::query();
    $orders = $orders
      ->where('user_email', Session::get('email_login'))
      ->where('status', OrderStatus::Draft)
      ->get();

    $grandTotal = 0;
    if (!empty($orders)) {
      $grandTotal = collect($orders)->sum(function ($order) use ($grandTotal) {
        return $grandTotal + $order->total_price;
      });
    }

    $data = [
      'grandTotal' => $grandTotal,
      'orders' => $orders
    ];
//    dd($orders);

    return view('web.cart.checkout', $data);
  }

  /**
   * @throws \Illuminate\Validation\ValidationException
   */
  public function placeOrder(Request $request): \Illuminate\Http\RedirectResponse
  {

    $req = $request->all();

    $rules = [
      'firstName' => 'required',
      'lastName' => 'required',
      'numberPhone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
      'address' => 'required',
      'town_city' => 'required',
    ];
    $this->validate($request, $rules);

    $orders = PendingOrder::query();
    $orders = $orders
      ->where('user_email', Session::get('email_login'))
      ->where('status', OrderStatus::Draft)
      ->get();

    if (!empty($orders) && !$orders->isEmpty()) {
      collect($orders)->map(function ($element) use ($req) {

        $order = [
          'product_id' => $element->product_id,
          'product_name' => $element->product_name,
          'cover_image' => $element->cover_image,
          'price' => $element->price,
          'total_price' => $element->total_price,
          'quantity' => $element->quantity,
          'status' => OrderStatus::Pending,
          'user_email' => $element->user_email,
          //add info user
          'first_name' => $req['firstName'],
          'last_name' => $req['lastName'],
          'number_phone' => $req['numberPhone'],
          'address' => $req['address'],
          'town_city' => $req['town_city']
        ];

        DB::collection('pending_orders')->where('_id', $element->id)->update($order);

        toastr()->success('Mua hàng thành công!', ['timeOut' => 3000]);
        return redirect()->route('list-book');
      });
    }

    return redirect()->route('list-book');
  }
}
