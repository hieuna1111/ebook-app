<?php
function wrap($string, $limit)
{
  if (strlen($string) <= $limit) {
    return $string;
  }
  $wstring = explode("\n", wordwrap($string, $limit, "\n"));
  return $wstring[0] . '...';
}
?>

@extends('layouts.web')

@section('title')
  WeupBook
@endsection

<head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css'
        type="text/css">
</head>

<style>
  .pull-down-selected.col-lg-2 {
    width: 37.666667%;
  }

  .sort-by.col-lg-5 {
    width: 82.666667%;
  }

  .top-navbar {
    height: 49px !important;
  }
</style>

@section('content')
  <section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
      <div class="breadcrumb-contents">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Shop</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <main class="inner-page-sec-padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 order-lg-2">
          <!--tool bar top -->
{{--          <div class="shop-toolbar with-sidebar mb--30">--}}

{{--            <div class="row align-items-center">--}}
{{--              <div class="col-lg-2 col-md-2 col-sm-6">--}}
{{--                <!-- Product View Mode -->--}}
{{--                <div class="product-view-mode">--}}
{{--                  <a href="#" class="sorting-btn" data-target="grid"><i class="fas fa-th"></i></a>--}}
{{--                  <a href="#" class="sorting-btn" data-target="grid-four">--}}
{{--											<span class="grid-four-icon">--}}
{{--												<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>--}}
{{--											</span>--}}
{{--                  </a>--}}
{{--                  <a href="#" class="sorting-btn  active" data-bs-target="list"><i--}}
{{--                      class="fas fa-list"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="col-xl-3 col-md-4 col-sm-6  mt--10 mt-sm--0">--}}
{{--									<span class="toolbar-status">--}}
{{--										Showing 1 to 9 of 14 (2 Pages)--}}
{{--									</span>--}}
{{--              </div>--}}
{{--              <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">--}}
{{--                <div class="sorting-selection">--}}
{{--                  --}}{{--                  <span>Show:</span>--}}
{{--                  --}}{{--                  <select class="form-control nice-select sort-select">--}}
{{--                  --}}{{--                    <option value="" selected="selected">3</option>--}}
{{--                  --}}{{--                    <option value="">9</option>--}}
{{--                  --}}{{--                    <option value="">5</option>--}}
{{--                  --}}{{--                    <option value="">10</option>--}}
{{--                  --}}{{--                    <option value="">12</option>--}}
{{--                  --}}{{--                  </select>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="col-xl-5 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">--}}
{{--                <div class="sorting-selection">--}}
{{--                  <span>Sort By:</span>--}}
{{--                  <select class="form-control nice-select sort-select mr-0 wide">--}}
{{--                    <option value="" selected="selected">Default Sorting</option>--}}
{{--                    <option value="">Sort--}}
{{--                      By:Name (A - Z)--}}
{{--                    </option>--}}
{{--                    <option value="">Sort--}}
{{--                      By:Name (Z - A)--}}
{{--                    </option>--}}
{{--                  </select>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
          <!--tool bar top 2 -->
          <div class="shop-toolbar d-none">

            <div class="row align-items-center">
              <div class="col-lg-2 col-md-2 col-sm-6">
                <!-- Product View Mode -->
                <div class="product-view-mode">
                  <a href="#" class="sorting-btn active" data-target="grid"><i
                      class="fas fa-th"></i></a>
                  <a href="#" class="sorting-btn" data-bs-target="grid-four">
											<span class="grid-four-icon">
												<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
											</span>
                  </a>
                  <a href="#" class="sorting-btn" data-bs-target="list "><i
                      class="fas fa-list"></i></a>
                </div>
              </div>
              <div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
									<span class="toolbar-status">
										Showing 1 to 9 of 14 (2 Pages)
									</span>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                <div class="sorting-selection">
                  <span>Show:</span>
                  <select class="form-control nice-select sort-select">
                    <option value="" selected="selected">3</option>
                    <option value="">9</option>
                    <option value="">5</option>
                    <option value="">10</option>
                    <option value="">12</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-sm-6  mt--10 mt-md--0 sort-by">
                <div class="sorting-selection">
                  <span>Sort By:</span>
                  <select class="form-control nice-select sort-select mr-0">
                    <option value="" selected="selected">Default Sorting</option>
                    <option value="">Sort
                      By:Name (A - Z)
                    </option>
                    <option value="">Sort
                      By:Name (Z - A)
                    </option>
                    <option value="">Sort
                      By:Price (Low &gt; High)
                    </option>
                    <option value="">Sort
                      By:Price (High &gt; Low)
                    </option>
                    <option value="">Sort
                      By:Rating (Highest)
                    </option>
                    <option value="">Sort
                      By:Rating (Lowest)
                    </option>
                    <option value="">Sort
                      By:Model (A - Z)
                    </option>
                    <option value="">Sort
                      By:Model (Z - A)
                    </option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <!-- book list -->
          <div class="shop-product-wrap list with-pagination row space-db--30 shop-border">
            @if(!empty($books) && !$books->isEmpty())
              @foreach($books as $book)
                <div class="col-lg-4 col-sm-6">
                  <div class="product-card card-style-list">
                    <div class="product-grid-content">
                      <div class="product-header">
                        <a href="" class="author">
                          Nhiều tác giả
                        </a>
                        <h3><a href="">{{ empty($book->name) ? "Chưa nhập tên sách" : wrap($book->name, 55) }}</a></h3>
                      </div>
                      <div class="product-card--body">
                        <div class="card-image">
                          <img
                            src="{{ empty($book->cover_image) ? "/web/image/products/product-2.jpg" : $book->cover_image }}"
                            alt="">
                          <div class="hover-contents">
                            <a href="#" class="hover-image">
                              <img
                                src="{{ empty($book->cover_image) ? "/web/image/products/product-2.jpg" : $book->cover_image }}"
                                alt="">
                            </a>
                            <div class="hover-btns">
                              <a href="cart.html" class="single-btn">
                                <i class="fas fa-shopping-basket"></i>
                              </a>
                              <a href="#" class="single-btn">
                                <i class="fas fa-heart"></i>
                              </a>
                              <a href="#" class="single-btn">
                                <i class="fas fa-random"></i>
                              </a>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#quickModal"
                                 class="single-btn">
                                <i class="fas fa-eye"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="price-block">
                          <span class="price">{{ empty($book->shop_price) ? 50000 : $book->shop_price }}đ</span>
                          <del class="price-old">335000đ</del>
                          <span class="price-discount">12%</span>
                        </div>
                      </div>
                    </div>
                    <div class="product-list-content">
                      <div class="card-image">
                        <img
                          src="{{ empty($book->cover_image) ? "/web/image/products/product-2.jpg" : $book->cover_image }}"
                          alt="">
                      </div>
                      <div class="product-card--body">
                        <div class="product-header">
                          <a href="" class="author">
                            Nhiều tác giả
                          </a>
                          <h3><a href=""
                                 tabindex="0">{{ empty($book->name) ? "Chưa nhập tên sách" : wrap($book->name, 65) }}</a>
                          </h3>
                        </div>
                        <article>
                          <h2 class="sr-only">Card List Article</h2>
                          <p>{{ empty($book->title) ? "Tiêu đề của sách" : $book->title }}...</p>
                        </article>
                        <div class="price-block">
                          <span class="price">{{ empty($book->shop_price) ? 50000 : $book->shop_price }}đ</span>
                          <del
                            class="price-old">{{ empty($book->shop_price) ? 335000 : ($book->shop_price * 0.12 + $book->shop_price) }}</del>
                          <span class="price-discount">12%</span>
                        </div>
                        <div class="rating-block">
                          <span class="fas fa-star star_on"></span>
                          <span class="fas fa-star star_on"></span>
                          <span class="fas fa-star star_on"></span>
                          <span class="fas fa-star star_on"></span>
                          <span class="fas fa-star star_on"></span>
                        </div>
                        <form action="/book/{{empty($book->slug) ? $book->id : $book->slug}}/add-to-cart" method="post">
                          @csrf
                          <div class="btn-block">
                            <input type="hidden" name="id" value="{!! empty($book->id) ? "" : $book->id !!}"/>
                            <input type="hidden" name="name"
                                   value="{!! empty($book->name) ? "Chưa nhập tên sách" : $book->name !!}"/>
                            <input type="hidden" name="cover_image"
                                   value="{!! empty($book->cover_image) ? "/web/image/products/product-2.jpg" : $book->cover_image !!}"/>
                            <input type="hidden" name="shop_price"
                                   value="{!! empty($book->shop_price) ? 100000 : $book->shop_price !!}"/>
                            <input type="hidden" name="quantity" value="1"/>
                            <button type="submit"
                                    href="/book/{{empty($book->slug) ? $book->id : $book->slug}}/add-to-cart"
                                    class="btn btn-outlined">Thêm vào giỏ hàng
                            </button>
                            {{--                          <a href="" class="card-link"><i class="fas fa-heart"></i> Yêu thích</a>--}}
                            {{--                        <a href="" class="card-link"><i class="fas fa-random"></i> </a>--}}
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
          <!-- Pagination Block -->
          <div class="row pt--30">
            <div class="col-md-12">
              <div class="pagination-block">
                <ul class="pagination-btns flex-center" style="">
                  {{ $books->links() }}
{{--                  <li><a href="" class="single-btn prev-btn ">|<i--}}
{{--                        class="zmdi zmdi-chevron-left"></i> </a></li>--}}
{{--                  <li><a href="" class="single-btn prev-btn "><i--}}
{{--                        class="zmdi zmdi-chevron-left"></i> </a></li>--}}
{{--                  <li class="active"><a href="" class="single-btn">1</a></li>--}}
{{--                  <li><a href="" class="single-btn">2</a></li>--}}
{{--                  <li><a href="" class="single-btn">3</a></li>--}}
{{--                  <li><a href="" class="single-btn">4</a></li>--}}
{{--                  <li><a href="" class="single-btn next-btn"><i--}}
{{--                        class="zmdi zmdi-chevron-right"></i></a></li>--}}
{{--                  <li><a href="" class="single-btn next-btn"><i--}}
{{--                        class="zmdi zmdi-chevron-right"></i>|</a></li>--}}
                </ul>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
               aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="product-details-modal">
                  <div class="row">
                    <div class="col-lg-5">
                      <!-- Product Details Slider Big Image-->
                      <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
												"slidesToShow": 1,
												"arrows": false,
												"fade": true,
												"draggable": false,
												"swipe": false,
												"asNavFor": ".product-slider-nav"
												}'>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-1.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-2.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-3.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-4.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-5.jpg" alt="">
                        </div>
                      </div>
                      <!-- Product Details Slider Nav -->
                      <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                           data-slick-setting='{
						"infinite":true,
						  "autoplay": true,
						  "autoplaySpeed": 8000,
						  "slidesToShow": 4,
						  "arrows": true,
						  "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
						  "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
						  "asNavFor": ".product-details-slider",
						  "focusOnSelect": true
						  }'>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-1.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-2.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-3.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-4.jpg" alt="">
                        </div>
                        <div class="single-slide">
                          <img src="/web/image/products/product-details-5.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7 mt--30 mt-lg--30">
                      <div class="product-details-info pl-lg--30 ">
                        <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                        <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                        <ul class="list-unstyled">
                          <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                          <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                          <li>Product Code: <span class="list-value"> model1</span></li>
                          <li>Reward Points: <span class="list-value"> 200</span></li>
                          <li>Availability: <span class="list-value"> In Stock</span></li>
                        </ul>
                        <div class="price-block">
                          <span class="price-new">£73.79</span>
                          <del class="price-old">£91.86</del>
                        </div>
                        <div class="rating-widget">
                          <div class="rating-block">
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star star_on"></span>
                            <span class="fas fa-star "></span>
                          </div>
                          <div class="review-widget">
                            <a href="">(1 Reviews)</a> <span>|</span>
                            <a href="">Write a review</a>
                          </div>
                        </div>
                        <article class="product-details-article">
                          <h4 class="sr-only">Product Summery</h4>
                          <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                            the Dust with ruffles
                            at the bottom
                            of the
                            dress.</p>
                        </article>
                        <div class="add-to-cart-row">
                          <div class="count-input-block">
                            <span class="widget-label">Qty</span>
                            <input type="number" class="form-control text-center" value="1">
                          </div>
                          <div class="add-cart-btn">
                            <a href="" class="btn btn-outlined--primary"><span
                                class="plus-icon">+</span>Add to Cart</a>
                          </div>
                        </div>
                        <div class="compare-wishlist-row">
                          <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                          <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="widget-social-share">
                    <span class="widget-label">Share:</span>
                    <div class="modal-social-share">
                      <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                      <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3  mt--40 mt-lg--0">
          <div class="inner-page-sidebar">
            <!-- Accordion -->
            <div class="single-block">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="sidebar-menu--shop">
                <li><a href="">Accessories (5)</a></li>
                <li><a href="">Arts & Photography (10)</a></li>
                <li><a href="">Biographies (16)</a></li>
                <li><a href="">Business & Money (0)</a></li>
                <li><a href="">Calendars (6)</a></li>
                <li><a href="">Children's Books (9)</a></li>
                <li><a href="">Comics (16)</a></li>
                <li><a href="">Cookbooks (7)</a></li>
                <li><a href="">Education (3)</a></li>
                <li><a href="">House Plants (6)</a></li>
                <li><a href="">Indoor Living (9)</a></li>
                <li><a href="">Perfomance Filters (5)</a></li>
                <li><a href="">Shop (16)</a>
                  <ul class="inner-cat-items">
                    <li><a href="">Saws (0)</a></li>
                    <li><a href="">Concrete Tools (7)</a></li>
                    <li><a href="">Drills (2)</a></li>
                    <li><a href="">Sanders (1)</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- Price -->
            {{--            <div class="single-block">--}}
            {{--              <h3 class="sidebar-title">Fillter By Price</h3>--}}
            {{--              <div class="range-slider pt--30">--}}
            {{--                <div class="sb-range-slider"></div>--}}
            {{--                <div class="slider-price">--}}
            {{--                  <p>--}}
            {{--                    <input type="text" id="amount" readonly="">--}}
            {{--                  </p>--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            <!-- Size -->
            {{--            <div class="single-block">--}}
            {{--              <h3 class="sidebar-title">Manufacturer</h3>--}}
            {{--              <ul class="sidebar-menu--shop menu-type-2">--}}
            {{--                <li><a href="">Christian Dior <span>(5)</span></a></li>--}}
            {{--                <li><a href="">Diesel <span>(8)</span></a></li>--}}
            {{--                <li><a href="">Ferragamo <span>(11)</span></a></li>--}}
            {{--                <li><a href="">Hermes <span>(14)</span></a></li>--}}
            {{--                <li><a href="">Louis Vuitton <span>(12)</span></a></li>--}}
            {{--                <li><a href="">Tommy Hilfiger <span>(0)</span></a></li>--}}
            {{--                <li><a href="">Versace <span>(0)</span></a></li>--}}
            {{--              </ul>--}}
            {{--            </div>--}}
            <!-- Color -->
            {{--            <div class="single-block">--}}
            {{--              <h3 class="sidebar-title">Select By Color</h3>--}}
            {{--              <ul class="sidebar-menu--shop menu-type-2">--}}
            {{--                <li><a href="">Black <span>(5)</span></a></li>--}}
            {{--                <li><a href="">Blue <span>(6)</span></a></li>--}}
            {{--                <li><a href="">Brown <span>(4)</span></a></li>--}}
            {{--                <li><a href="">Green <span>(7)</span></a></li>--}}
            {{--                <li><a href="">Pink <span>(6)</span></a></li>--}}
            {{--                <li><a href="">Red <span>(5)</span></a></li>--}}
            {{--                <li><a href="">White <span>(8)</span></a></li>--}}
            {{--                <li><a href="">Yellow <span>(11)</span> </a></li>--}}
            {{--              </ul>--}}
            {{--            </div>--}}
            <!-- Promotion Block -->
            <div class="single-block">
              <a href="" class="promo-image sidebar">
                <img src="/web/image/others/home-side-promo.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

<style>
  .page-item.active .page-link {
    background-color: #62ab00 !important;
    border-color: #62ab00 !important;
  }
</style>
