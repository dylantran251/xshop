<section class="hero hero-normal">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span class="fw-bold text-white" style="font-size: 14.5px;">Danh mục sản phẩm</span>
                    </div>
                    <ul>
                        @if(session('productCategory'))
                            @foreach (session('productCategory') as $category)
                                <li><a href="">{{ $category->name }}</a></li>           
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="d-block">
                <div class="input-group " >
                    <div class="form-outline d-inline-block" >
                        <input type="search" style="padding: 5px 25px 5px 10px;" id="form1" class="form-control" />
                    </div>
                    <button class="btn" style="background: #FFA726;">
                        <i class="fas fa-search text-white"></i>
                    </button>                        
                </div>                
            </div>

            <div class="d-flex dlex-row align-items-center">
                <div class="px-2">
                    <img src="{{ asset('images/zalo.png') }}" alt="">
                </div>
                <div class="">
                    <span>+84 123 456 789</span>
                    <h6 class="fw-bold">Zalo</h6>
                </div>
            </div>
        </div>
    </div>
</section>