@extends('layout.app')
@section('content')
<div class="container my-5">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Đặt hàng thành công!</h4>
        <a href="{{ route('home') }}">Quay lại</a>
        <hr>
        <p class="mb-0">Cảm ơn bạn đã tin tưởng và đặt hàng tại XShop.</p>
    </div>
</div>
@endsection