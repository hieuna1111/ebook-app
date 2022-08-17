<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PendingOrder;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index(Request $request)
    {
//      $books = Product::all();

      $query = Product::query();
      $result = $query->paginate(5);

      $data = [
        'books' => $result,
      ];

      return view('web.book.list', $data);
    }

  public function addToCart(Request $request)
  {
    $data = $request->all();

    $order = [
      'product_id' => $data['id'],
      'product_name' => $data['name'],
      'cover_image' => $data['cover_image'],
      'price' => $data['shop_price'],
      'quantity' => (int)$data['quantity'],
      'total_price' => $data['shop_price'],
      'status' => 'pending',
      'user_email' => empty(Session::get('email_login')) ? null : Session::get('email_login')
    ];

    $bookInCart = DB::collection('pending_orders')
      ->where('user_email', Session::get('email_login'))
      ->where('product_id', $data['id'])
      ->where('status', 'pending')
      ->first();

    if (empty($bookInCart)) {
      DB::collection('pending_orders')->insert($order);
    } else {
      $order['quantity'] = $bookInCart['quantity'] + 1;
      DB::collection('pending_orders')
        ->where('product_id', $data['id'])
        ->update($order);
    }

    toastr()->success('Thêm vào giỏ hàng thành công!', ['timeOut' => 3000]);

    return redirect('/book/list');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
