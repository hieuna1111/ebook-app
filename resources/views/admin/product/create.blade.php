@extends('layouts.admin')

@section('title')
  Admin | Books
@endsection

@section('content')

  <div class="container-fluid">
    <div class="page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Book</a></li>
        <li class="breadcrumb-item active"><a>Create</a></li>
      </ol>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Book Information</h4>
          </div>
          <div class="card-body">
            <div class="form-validation">
              <form class="form-valide" action="{{ (!empty($book) ? '/admin/product/'.$book['slug'].'/update' : '/admin/product/store') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-xl-6">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-username">Book name
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="name"
                               placeholder="Enter a book name.."
                               value="{!! !empty($book) ? $book['name'] : old('name')  !!}">
                      </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-10">{{ $message }}</div>
                    @enderror
{{--                    <div class="form-group row">--}}
{{--                      <label class="col-lg-4 col-form-label" for="val-email">Email <span--}}
{{--                          class="text-danger">*</span>--}}
{{--                      </label>--}}
{{--                      <div class="col-lg-6">--}}
{{--                        <input type="text" class="form-control" id="val-email" name="val-email"--}}
{{--                               placeholder="Your valid email..">--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                      <label class="col-lg-4 col-form-label" for="val-password">Password--}}
{{--                        <span class="text-danger">*</span>--}}
{{--                      </label>--}}
{{--                      <div class="col-lg-6">--}}
{{--                        <input type="password" class="form-control" id="val-password" name="val-password"--}}
{{--                               placeholder="Choose a safe one..">--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                      <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span--}}
{{--                          class="text-danger">*</span>--}}
{{--                      </label>--}}
{{--                      <div class="col-lg-6">--}}
{{--                        <input type="password" class="form-control" id="val-confirm-password"--}}
{{--                               name="val-confirm-password" placeholder="..and confirm it!">--}}
{{--                      </div>--}}
{{--                    </div>--}}
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-suggestions">Title <span
                          class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <textarea class="form-control" id="val-suggestions" name="title" rows="5">
                          {!! !empty($book) ? $book['title'] : '' !!}
                        </textarea>
                      </div>
                    </div>
                    @error('title')
                    <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-10">{{ $message }}</div>
                    @enderror

                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-username">Stock quantity
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="shop_stock_quantity"
                               placeholder="Enter stock quantity for a book"
                               value="{!! !empty($book) ? $book['shop_stock_quantity'] : old('shop_stock_quantity')  !!}">
                      </div>
                    </div>
                    @error('shop_stock_quantity')
                    <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-10">{{ $message }}</div>
                    @enderror

                  </div>
                  <div class="col-xl-6">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-skill">Categories
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <select class="form-control" id="val-skill" name="book_category_id">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    @error('book_category_id')
                    <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-10">{{ $message }}</div>
                    @enderror
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-currency">Price
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-currency" name="shop_price"
                               placeholder="250000₫"
                               value="{!! !empty($book) ? $book['shop_price'] : old('shop_price')  !!}">
                      </div>
                    </div>
                    @error('shop_price')
                    <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-10">{{ $message }}</div>
                    @enderror
{{--                    <div class="form-group row">--}}
{{--                      <label class="col-lg-4 col-form-label" for="val-website">Slug--}}
{{--                        <span class="text-danger">*</span>--}}
{{--                      </label>--}}
{{--                      <div class="col-lg-6">--}}
{{--                        <input type="text" class="form-control" id="val-website" name="slug"--}}
{{--                               placeholder="http://example.com/product/Toi-yeu-viet-name">--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                      <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (US)--}}
{{--                        <span class="text-danger">*</span>--}}
{{--                      </label>--}}
{{--                      <div class="col-lg-6">--}}
{{--                        <input type="text" class="form-control" id="val-phoneus" name="val-phoneus"--}}
{{--                               placeholder="212-999-0000">--}}
{{--                      </div>--}}
{{--                    </div>--}}
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-digits">Discount <span
                          class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-digits" name="shop_discount" placeholder="5%"
                               value="{!! !empty($book) ? $book['shop_discount'] : old('shop_discount')  !!}">
                      </div>
                    </div>
                    @error('shop_discount')
                    <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-10">{{ $message }}</div>
                    @enderror
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-number">Cover image URL <span
                          class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-number" name="cover_image"
                               placeholder="https://cf.shopee.vn/file/1fb34361e7a4aa2064024225addd40c4"
                               value="{!! !empty($book) ? $book['cover_image'] : old('cover_image')  !!}">
                      </div>
                    </div>
                    @error('cover_image')
                    <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-10">{{ $message }}</div>
                    @enderror
{{--                    <div class="form-group row">--}}
{{--                      <label class="col-lg-4 col-form-label" for="val-range">Range [1, 5]--}}
{{--                        <span class="text-danger">*</span>--}}
{{--                      </label>--}}
{{--                      <div class="col-lg-6">--}}
{{--                        <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                      <label class="col-lg-4 col-form-label"><a--}}
{{--                          href="javascript:void()">Terms &amp; Conditions</a> <span--}}
{{--                          class="text-danger">*</span>--}}
{{--                      </label>--}}
{{--                      <div class="col-lg-8">--}}
{{--                        <label class="css-control css-control-primary css-checkbox" for="val-terms">--}}
{{--                          <input type="checkbox" class="css-control-input mr-2"--}}
{{--                                 id="val-terms" name="val-terms" value="1">--}}
{{--                          <span class="css-control-indicator"></span> I agree to the--}}
{{--                          terms</label>--}}
{{--                      </div>--}}
{{--                    </div>--}}
                  </div>
                </div>
                <div class="form-group row col-xl-12">
                  <textarea name="description" class="form-control summernote_rpt summernote_custom"
                            placeholder="Some description ..." rows="10"
                            id="description">
                    {!! !empty($book) ? $book['description'] : '' !!}
                  </textarea>
                </div>
                @error('description')
                <div class="alert alert-danger alert-dismissible alert-alt fade show small pt-1 pb-1 col-xl-12" role="alert">{{ $message }}</div>
                @enderror
                <div class="form-group row mt-3">
                  <div class="col-lg-8 ml-auto">
                    <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>

    $('#summernote').summernote({
      placeholder: 'Details description',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });

    $(document).ready(function() {
      $('#summernote').summernote();
    });

    $("#summernote").code("your text");
  </script>

@endsection
