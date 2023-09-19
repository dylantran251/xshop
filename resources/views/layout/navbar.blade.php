<div>
    <div class="container" >
        <div class="d-flex justify-content-between align-items-center py-2">
            <a href=""><img class="img-fluid align-middle" src="{{ asset('images/logo.png') }}" alt=""></a>
            <nav class="header__menu fw-bold" >
                <ul class="list-inline d-flex ">
                    <li class="active "><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="active "><a href="{{ route('shop') }}">Cửa hàng</a></li>
                    <li class="active"><a href="{{ route('blog') }}">Bài viết</a></li>
                    <li class="active"><a href="{{ route('contact') }}">Liên hệ</a></li>
                </ul>
            </nav>
    
            <div class="bg-danger p-0 h-100">
                <a href="{{ route('shop.cart') }}" class="btn"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</div>
