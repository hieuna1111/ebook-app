<?php

namespace App\Http\Controllers\Web;

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

    return view('web.cart.list')->with('orders', $orders);
  }

  public function update(Request $request, $id): \Illuminate\Http\JsonResponse
  {
    $data = $request->all();
    $order = [
      'product_name' => $data['name'],
      'cover_image' => $data['image'],
      'price' => floatval($data['price']),
      'quantity' => (int)$data['quantity'],
      'total_price' => floatval($data['totalPrice'])
    ];
    DB::collection('pending_orders')->where('_id', $id)->update($order);
    return response()->json(['data' => $order]);
  }

  public function checkout() {
    return view('web.cart.checkout');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
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
