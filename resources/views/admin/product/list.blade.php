@extends('layouts.admin')

@section('title')
  Admin | Books
@endsection

@section('content')
  <div class="container-fluid">
    <div class="page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Book</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
      </ol>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"></h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="table-responsive table-hover fs-14">
                <div id="example_wrapper" class="dataTables_wrapper">
                  <table id="example" class="display dataTable" style="min-width: 845px" role="grid"
                         aria-describedby="example_info">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Stock Quantity</th>
                      <th>Price</th>
                      <th>Discount</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($books) && !$books->isEmpty())
                      @foreach($books as $book)
                        <tr>
                          <td><img class="rounded-circle" width="200" height="220"
                                   src="{{$book->cover_image}}"
                                   alt="" href="{{$book->cover_image}}">
                          </td>
                          <td><a class="small" href="#">{{$book->name}}</a></td>
                          <td>{{$book->shop_stock_quantity}}</td>
                          <td>{{$book->shop_price}}</td>
                          <td>{{$book->shop_discount}}</td>
                          <td>
                            <div class="d-flex">
                              <a href="/admin/book/{{$book->slug}}/edit" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                  class="fa fa-pencil"></i></a>
                              <a href="/admin/book/{{$book->slug}}/delete" class="btn btn-danger shadow btn-xs sharp"><i
                                  class="fa fa-trash"></i></a>
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
    </div>
  </div>
@endsection
