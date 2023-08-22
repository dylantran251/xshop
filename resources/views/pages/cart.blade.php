@extends('layout.app')
@section('content')
@php
    $formatTotal = 0;   
@endphp
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Trang chủ</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        @if($products)
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>                                
                                    @foreach ($products as $product)
                                        <tr>
                                            @php
                
                                                $priceVND = number_format($product['price'], 0, ',', '.') . 'đ';
                                                $images = $product['image'];
                                                $subImg = explode("|", $images);
                                                $subTotal = $product['price'] * $product['quantity'];
                                                $formatSubTotal = number_format($subTotal, 0, ',', '.') . 'đ';
                                                $total = 0;
                                                $total = $total + $subTotal;
                                                $formatTotal = number_format($total, 0, ',', '.') . 'đ';
                                            @endphp
                                            <td class="shoping__cart__item">
                                                <img width="72" style="border-radius: 25px; " src="{{ asset('images/products/'.$subImg[0]) }}" alt="">   
                                                <h5>{{ $product['name'] }}</h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                {{ $priceVND }}
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" value="{{ $product['quantity'] }}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total">
                                                {{ $formatSubTotal }}
                                            </td>

                                            <td class="shoping__cart__item__close">
                                                <a href=""><span class="icon_close"></span></a>
                                            </td>
                                        </tr>                                    
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="text-center">
                                <span style="font-size: 24px;">Giỏ hàng chưa có sản phẩm nào...</span>
                            </div> 
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="shoping__checkout">
                        <h5>Thanh toán giỏ hàng</h5>
                        <ul>
                            <li>Tổng tiền: <span>{{ $formatTotal }}</span></li>
                        </ul>
                        <div>
                            <a href="{{ ($formatTotal == 0) ? route('shop.cart') : route('shop.cart.checkout') }}" class="primary-btn">Thanh toán</a>   
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ route('shop') }}" class="primary-btn cart-btn">Tiếp tục mua sắm</a>
                        <a href="{{ route('shop.cart') }}" class="primary-btn cart-btn cart-btn-right">Cập nhật giỏ hàng</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection