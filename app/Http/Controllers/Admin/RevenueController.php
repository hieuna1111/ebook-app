<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
  public function index()
  {
    $data = Order::all();
    return view('admin.chart.revenue')->with('data', $data);
  }
}
