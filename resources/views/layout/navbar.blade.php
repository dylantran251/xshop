<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <div class="">
            <div class="header__logo">
                <a href="" class="font-weight-bold fs-1">Logo ở đây</a>
            </div>
        </div>
        <div class="">
            <nav class="header__menu">
                <ul>
                    <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="active"><a href="{{ route('shop') }}">Cửa hàng</a></li>
                    <li class="active"><a href="{{ route('blog') }}">Bài viết</a></li>
                    <li class="active"><a href="{{ route('contact') }}">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="">
            <div class="header__cart">
                <ul style="padding: 5px 0;">
                    <li><a style="	letter-spacing: 0.5px;
                        font-size: 16px;
                        color: #252525;
                        text-transform: uppercase;
                        font-weight: 700;"
                         href="{{ route('shop.cart') }}">Giỏ hàng<i class="fa-solid fa-cart-shopping fa-2x"></i><span>{{ (Auth::check()) ? session('numProducts') : count(session('cart', []) ) }}</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    {{-- <div class="humberger__open">
        <i class="fa fa-bars"></i>
    </div> --}}
</div>