<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategories;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{

  public function index()
  {
    $books = Product::all();
    return view('admin.product.list')->with('books', $books);
  }

  public function create()
  {
    $categories = ProductCategories::all();

    return view('admin.product.create')->with('categories', $categories);
  }

  /**
   * @throws Exception
   */
  public function store(Request $request)
  {
    $req = $request->all();

    $rules = [
      'name' => [
        'required',
        Rule::unique('products', 'name')->where('name', $req['name'])
      ],
      'title' => 'required',
      'book_category_id' => 'required',
      'shop_price' => 'required|integer|min:0',
      'shop_discount' => 'required|numeric|between:0,100',
      'cover_image' => 'required|url',
      'description' => 'required',
      'shop_stock_quantity' => 'required|integer|min:0',
    ];
    $this->validate($request, $rules);

    $data = [
      'name' => $req['name'],
      'title' => $req['title'],
      'book_category_id' => $req['book_category_id'],
      'shop_price' => $req['shop_price'],
      'slug' => Str::slug($req['name']),
      'shop_discount' => $req['shop_discount'] . '%',
      'cover_image' => $req['cover_image'],
      'description' => $req['description'],
      'shop_stock_quantity' => $req['shop_stock_quantity']
    ];

    DB::collection('products')->insert($data);

    return redirect('/admin/product/list');
  }

  public function show($id)
  {
    //
  }

  public function edit($slug)
  {
    $categories = ProductCategories::all();

    $book = DB::collection('products')->where('slug', $slug)->first();

    $data = [
      'categories' => $categories,
      'book' => $book
    ];

    return view('admin.product.create', $data);
  }

  /**
   * @throws Exception
   */
  public function update(Request $request, $slug)
  {
    $req = $request->all();

    $rules = [
      'name' => 'required',
      'title' => 'required',
      'book_category_id' => 'required',
      'shop_price' => 'required|integer|min:0',
      'shop_discount' => 'required',
      'cover_image' => 'required|url',
      'description' => 'required',
      'shop_stock_quantity' => 'required|integer|min:0',
    ];
    $this->validate($request, $rules);

    $data = [
      'name' => $req['name'],
      'title' => $req['title'],
      'book_category_id' => $req['book_category_id'],
      'shop_price' => $req['shop_price'],
      'slug' => Str::slug($req['name']),
      'shop_discount' => $req['shop_discount'],
      'cover_image' => $req['cover_image'],
      'description' => $req['description'],
      'shop_stock_quantity' => $req['shop_stock_quantity']
    ];

    DB::collection('products')->where('slug', $slug)->update($data);

    return redirect('/admin/product/list');
  }

  public function destroy($slug)
  {
    DB::collection('products')->where('slug', $slug)->delete();

    return redirect('/admin/product/list');
  }
}
