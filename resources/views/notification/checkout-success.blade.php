@extends('layout.app')
@section('content')
<div class="container text-center">
    <div class="card-body">
        <span>Bạn cần đăng nhập để có thể mua hàng!</span>
        <small>Nếu chưa có tài khoản bạn có thể tạo tài khoản ở trang <a href="{{ route('shop.cart.checkout') }}">Thanh toán</a> hoặc là đăng kí tài khoản <a href="">Tại đây</a></small>
    </div>
</div>
@endsection