@extends('layout.app')
@section('content')

    <header>
        <div class="mb-5  bg-primary">
            <div class="container py-1">
                <h4 class="text-white mt-2">Sản phẩm </h4>
                <nav class="d-flex mb-2">
                    <h6 class="mb-0">
                        <a href="" class="text-white-50">Trang chủ</a>
                        <span class="text-white-50 mx-2"> / </span>
                        <a href="" class="text-white-50">Cửa hàng</a>
                        <span class="text-white-50 mx-2"> / </span>
                        <a href="" class="text-white-50">Sản phẩm</a>
                    </h6>
                </nav>
            </div>
        </div>
    </header>

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    @php
                        $priceVND = number_format($product->price, 0, ',', '.') ;
                        $images = $product->image;
                        $subImg = explode("|", $images);
                    @endphp
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{asset('images/products/'. $subImg[0])}}" alt="" style="width: 100%; height: 50%;">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach ($subImg as $image)
                                <img data-imgbigurl="{{asset('images/products/'. $image)}}"
                                src="{{ asset('images/products/'. $image)}}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $product->name }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 đánh giá)</span>
                        </div>
                        <div class="product__details__price">{{ $priceVND }}đ</div>
                        <a href="{{ route('shop.add-product-to-cart', $product->id) }}" class="btn bg-primary h-100 fw-bold text-uppercase text-white p-1">Thêm vào giỏ hàng</a>
                    </div>
                    <div>
                        <p class="fw-bold fs-4 pt-3" >Mô tả</p>
                        <p>{{ $product->description }}</p>
                    </div>
                    
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        {{-- <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
 
                                </div>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Có thể bạn quan tâm</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        @foreach ($relatedProduct as $product)
                        <div class="product__item__text">
                            <h6><a href="#">{{ $product->name }}</a></h6>
                            <h5>{{ $product->price }}</h5>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
@endsection