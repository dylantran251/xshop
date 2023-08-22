@extends('layout.app')
@section('content')
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="hero__item set-bg col-12" data-setbg="images/banner.jpeg">
                <div class="">
                    <span class="font-weight-bold text-primary">Xin chào!</span>
                    <h2 class="font-weight-bold text-white">Đồ ăn vặt X-Shop <br />Ăn là ghiền</h2>
                    <p class="text-white">Miễn phí ship cho đơn hàng từ 300k</p>
                    <a href="#" class="primary-btn">Xem ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="categories mt-3">
    <div class="container">
        <div class="section-title">
            <h2>Danh mục sản phẩm</h2>
        </div>
        <div class="categories__slider owl-carousel ">
            @foreach ($productCategory as $category)
                <div class="d-flex justify-content-center">
                    <div class="categories__item set-bg " data-setbg="{{ asset('images/product-category/'.$category->image) }}">
                        <h5><a href="#">{{ $category->name }}</a></h5>
                    </div>   
                </div>                     
            @endforeach
        </div>
    </div>
</section>



<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        @php
                            $categories = App\Models\ProductCategory::take(3)->get();
                            $products = App\Models\Product::take(8)->get();
                        @endphp
                        <li class="active" data-filter="*">Tất cả</li>
                        @foreach ($categories as $category)
                            <li>{{ $category->name }}</li>   
                        @endforeach
            
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($products as $product)
                @php
                    $priceVND = number_format($product->price, 0, ',', '.') . 'đ';
                    $images = $product->image;
                    $subImg = explode("|", $images);
                @endphp
                <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                    <div class="product__item">
                        <div class="product__item__pic set-bg mb-3" data-setbg="{{ asset('images/products/'.$subImg[0]) }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li>
                                    <a href="{{ route('shop.add-product-to-cart', $product->id) }}" class="">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>                                        
                            </ul>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="text-start">Giá: {{ $priceVND }}</h5>
                            <h6><a href="#">{{ $product->name }}</a></h6>
                        </div>
                    </div>
                </div> 
            @endforeach

        </div>
    </div>
</section>

<section class="my-2">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="section-title col-12">
                    <h2>Khuyến mãi hot</h2>
                </div>
                <div class="hero__item set-bg col-12" data-setbg="images/banner.jpeg">
                    <div class="text-center">
                        <span class="font-weight-bold text-primary">Xin chào!</span>
                        <h2 class="font-weight-bold text-white">Đồ ăn vặt X-Shop <br />Ăn là ghiền</h2>
                        <p class="text-white">Miễn phí ship cho đơn hàng từ 300k</p>
                        <a href="#" class="primary-btn">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-product spad">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Giảm giá</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Bán chạy</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Đánh giá cao</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic" style="border-radius: 50px;">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Bài viết</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @for($i = 0; $i < 3; $i++)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>05/06/2013</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Những loại đồ ăn khô hot nhất hiện nay</a></h5>
                            <p>Ăn ngon mà khỏe là niềm vui của mỗi người </p>
                        </div>
                    </div>
                </div>                
            @endfor

        </div>
    </div>
</section>

@endsection