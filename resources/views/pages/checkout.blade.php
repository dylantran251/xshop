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
            @if(session('notification'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <div class="d-flex justify-content-between">
                    <p class="m-0">{{ session('notification') }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
            @endif
            <section class="checkout spad">
                <div class="checkout__form">
                    <form action="{{ route('shop.cart.checkout.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-7 mb-3">
                                <h4 class="mb-3">Chi tiết đơn hàng</h4>
                                <div class="d-flex justify-content-between mb-3 gap-3">
                                    <div class="w-100">
                                        <label for="firstName">Họ</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="{{ ($userDetails['last_name']) ? $userDetails['last_name'] : ' ' }}">
                                    </div>
                                    <div class="w-100">
                                        <label for="lastName">Tên</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="{{ ($userDetails['first_name']) ? $userDetails['first_name'] : ' '}}" >
                                    </div>
                                </div>
                                @if (Auth::check())
                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly >
                                    </div>
                                @endif
                                  
                                @php
                                    $subAddress = explode(",", $userDetails['address1']);
                                @endphp
                                <div class="mb-3">
                                    <label for="address">Địa chỉ</label>
                                    <div class="d-flex flex-justify-content-between gap-3 mb-3">
                                        <input type="text" class="form-control" id="address" name="address1" placeholder="Thôn/Xóm"  value="{{ ($subAddress) ? $subAddress[0] : '' }}">
                                        <input type="text" class="form-control" id="address" name="address2" placeholder="Xã/Phường" value="{{ ($subAddress) ? $subAddress[1] : '' }}">
                                    </div>
                                    <div class="d-flex flex-justify-content-between gap-3 mb-3">
                                        <input type="text" class="form-control" id="address" name="address3" placeholder="Quận/Huyện" value="{{ ($subAddress) ? $subAddress[2] : '' }}">
                                        <input type="text" class="form-control" id="address" name="address4" placeholder="Tỉnh/Thành phố" value="{{ ($subAddress) ? $subAddress[3] : '' }}">
                                    </div>
                                    <input type="text" class="form-control" id="address" name="address5" placeholder="Số nhà, tên đường, ngõ..." value="{{ ($subAddress) ? $subAddress[4] : '' }}">
                                </div>

                                <div class="mb-3">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ ($userDetails['phone']) ? $userDetails['phone'] : '' }}">
                                </div>

                                <div class="mb-3">
                                    <label for="note">Ghi chú </label>
                                    <textarea type="text" class="form-control" id="note" name="note" placeholder="Nhớ để lại lời nhắn nha..."> </textarea>
                                </div>
                        
                                @if(!Auth::check())
                                    <h4> Tài khoản </h4>
                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="verifyPassword">Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" id="verifyPassword" name="verifyPassword" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        Nếu bạn đã có tài khoản hãy 
                                       <a href=""> đăng nhập</a> 
                                        để tiếp tục đặt hàng. Nếu chưa có tài khoản bạn hãy tích vào tạo tài khoản hoặc 
                                        <a class="text-danger" href="">đăng ký ngay.</a>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="save-info" name="register">
                                        <label class="custom-control-label" for="save-info">Tạo tài khoản</label>
                                    </div>
                                @endif
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address" name="defaulAddress">
                                    <label class="custom-control-label" for="same-address">Đặt địa chỉ này làm địa chỉ mặc định</label>
                                </div>
                            </div>


                            <div class="col-md-5 mb-4">
                                <h4 > Giỏ hàng </h4>
                                <ul class="list-group mb-3 bg-primary"> 
                                    <li class="list-group-item ">
                                        <div class="d-flex justify-content-between align-items-center my-2">
                                            <h5 class="h6 fw-bold m-0">Sản phẩm</h5>
                                            <h5 class="h6 fw-bold m-0">Giá tiền</h5>
                                        </div>
                                    </li>   
                                    {{-- @if(Auth::check())
                                        
                                    @endif --}}
                                    {{-- @foreach ($cartItems as $item)
                                        <li class="list-group-item ">
                                            <div class="d-flex justify-content-between align-items-center my-2">
                                                <h5 class="h6 m-0">{{$item->product->name}}</h5>
                                                <span>{{$item->sub_total}}</span>
                                            </div>
                                        </li>   
                                    @endforeach  --}}
                                    @foreach ($items as $item)
                                        <li class="list-group-item ">
                                            <div class="d-flex justify-content-between align-items-center my-2">
                                                <h5 class="h6 m-0">{{$item['name']}}</h5>
                                                <span>{{$item['sub_total']}}đ</span>
                                            </div>
                                        </li>   
                                    @endforeach 
                                    <li class="list-group-item "> 
                                        <h5 class="h6 mt-3">Thanh toán</h5>
                                        <div class="d-block my-3">
                                            <div class="custom-control custom-radio">
                                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label fw-bold" for="credit">Thanh toán khi nhận hàng</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="0">
                                                <label class="custom-control-label fw-bold" for="debit">Thanh toán bằng thẻ ngân hàng</label>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="list-group-item ">
                                        <div class="d-flex justify-content-between align-items-center my-2">
                                            <h5 class="h6 fw-bold m-0">Tổng</h5>
                                            <h5 class="h6 fw-bold m-0">{{$formatTotal}}đ</h5>
                                        </div>
                                    </li> 
                                    <li class="list-group-item ">
                                        <div class="d-flex justify-content-between align-items-center my-2">
                                            <p class=" m-0">Khuyến mãi</p>
                                            <span class=" m-0">- 0đ</span>
                                        </div>
                                    </li> 
                                    <li class="list-group-item ">
                                        <div class="d-flex justify-content-between align-items-center my-2">
                                            <p class="m-0">Phí ship</p>
                                            <span class="m-0">Free</span>
                                        </div>
                                    </li> 
                                    <li class="list-group-item bg-danger text-white">
                                        <div class="d-flex justify-content-between align-items-center my-2 ">
                                            <h5 class="h6 fw-bold m-0">Phải trả</h5>
                                            <h5 class="h6 fw-bold m-0">{{$formatTotal}}đ</h5>
                                        </div>
                                    </li> 
                                </ul>         
                                <button type="submit" class="btn btn-secondary text-uppercase w-100 bg-info fw-bold">Đặt hàng</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection