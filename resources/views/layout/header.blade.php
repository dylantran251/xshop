
<div class="header__top">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="">
                <span style="font-size: 12px;">Địa chỉ: KCN ICTU, Đường Z115, Quyết Thắng, Tp. Thái Nguyên</span>
            </div>
            <div class="">
                @if(Auth::check())
                    <div class="btn-group ">
                        <div class="d-flex flex-row align-items-center ">
                            <a href="{{ route('order.my-order.order-tracking') }}" style="font-size: 14px; padding: 0px;" class="btn text-white" > 
                                Theo dõi đơn hàng
                            </a> 
                            <div class="border h-100 mx-2"></div>
                            <a style="font-size: 14px; padding: 0px;" class="btn text-white" > 
                                Thông báo
                            </a>    
                            <div class="border h-100 mx-2"></div>
                            {{-- <img height="18" class="px-1" src="{{ asset('images/user.png') }}" alt=""> --}}
                            <a style="font-size: 14px; padding: 0px;" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false"> 
                                Tài khoản
                            </a>    
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Hồ sơ</span>
                                            <i class="fa-solid fa-caret-right fa-xs"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Đơn hàng của tôi</span>
                                            <i class="fa-solid fa-caret-right fa-xs"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Cài đặt</span>
                                            <i class="fa-solid fa-caret-right fa-xs"></i>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Đăng xuất</span>
                                            <i class="fa-solid fa-right-to-bracket fa-xs"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>                                
                        </div>
                    </div>
                @else
                    <div class="btn-group">                
                        <div class="d-flex flex-row align-items-center text-white">
                            <a href="{{ route('login') }}" style="font-size: 14px; padding: 0px;" class="btn">Đăng nhập</a>  
                            <div class="border mx-1 border-black" style="height: 70%;"></div>
                            <a style="font-size: 14px; padding: 0px;" class="btn">Đăng ký</a>  
                        </div> 
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>