@extends('layout.app')
@section('content')
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
    <section class="shoping-cart spad">
        <div class="container">
            @if($products)
            <div class="row">
                <div class="col-lg-12">               
                    <div class="shoping__cart__table">
                        <table class="table"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-start">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row align-items-center" >
                                            <img class="rounded-circle" width="72" height="72" src="{{ ($product['image'] != null) ? asset('images/products/'.$product['image']) : asset('img/blog/blog-1.jpg')}}"   alt="">
                                            <h5 class="text-black mb-0 text-truncate" style="margin-left:10px; max-width: 450px; display:inline-block; font-weight:600;">{{ $product['name'] }}</h5>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__price align-middle">
                                        {{ $product['price'] }}
                                    </td>                                                
                                    <td class="shoping__cart__quantity align-middle">
                                        <div>
                                            <input type="number" value="{{ (int)$product['quantity'] }}" name="quantity">
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total align-middle">
                                        {{ $product['formatSubTotal'] }}
                                    </td>
                                    <form action="{{ route('shop.cart.delete-item-cart', $product['cart_id']) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <td class="shoping__cart__item__close align-middle">
                                            <button type="submit"><i class="fa-solid fa-xmark fa-lg"></i></button>
                                        </td>
                                    </form>
                                </tr>    
                                @endforeach                                              
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12 my-4">
                        <div class="d-flex justify-content-center">
                            <div class="shoping__checkout">
                                <h5>Thanh toán giỏ hàng</h5>
                                <ul>
                                    @php
                                        $formatTotal = 0;
                                        $formatTotal = number_format($total, 0, ',', '.') . 'đ';
                                    @endphp
                                    <li>Tổng tiền: <span>{{ $formatTotal }}</span></li>
                                </ul>
                                <div>
                                    <a href="{{ route('shop.cart.checkout') }}" class="primary-btn">Thanh toán</a>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="alert alert-info text-center" role="alert">
                    Giỏ hàng trống tới <a href="{{ route('shop') }}" class="alert-link text-primary"> Cửa Hàng </a>. Mua sắm ngay!
                </div>
             @endif
        </div>
    </section>
@endsection