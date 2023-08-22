@extends('layout.app')
@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2></h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <span>Đặt hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Bạn có mã giảm giá không? <a href="#">Nhập mã</a> 
                    </h6>
                </div>
            </div>
            @if(session('notification'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <div class="d-flex justify-content-between">
                    <div>
                     {{ session('notification') }}   
                    </div>
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
            @endif
            <div class="checkout__form">
                <h4>Chi tiết đơn hàng</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add">
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                            </div>
                            <div class="checkout__input">
                                <p>Tỉnh/Thành phố<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <input type="text"
                                    placeholder="Ăn gì ghi đây...">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Tạo tài khoản?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Tạo một tài khoản bằng cách nhập các thông tin dưới đây. Nếu bạn đã có tài khoản hãy đăng nhập trước khi mua hàng!</p>
                            <div class="checkout__input">
                                <p>Mật khẩu<span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Tổng</span></div>
                                @if(session('cart'))
                                    @foreach (session('cart') as $product)
                                        <ul>
                                            <li>{{ $product['name'] }}<span>{{$product['price']}}</span></li>
                                        </ul>
                                    @endforeach
                                @else
                                    <a href=""><span>Bạn chưa thêm sản phẩm nào</span> Tới cửa hàng! </a>
                                @endif
                                <div class="checkout__order__subtotal">Giảm giá: <span>50.000đ</span></div>
                                <div class="checkout__order__total">Tổng: <span>500.000đ</span></div>
                                <p>Abc lợn xề Đông Lỗ nhà ai...</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Thanh toán trực tuyến
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Thanh toán khi nhận hàng
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="{{ route('shop.cart.checkout.store') }}" class="site-btn">Đặt hàng</a>
                        
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection