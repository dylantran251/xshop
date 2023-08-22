<section class="hero hero-normal">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span class="fw-bold text-white" style="font-size: 16px;">Danh mục sản phẩm</span>
                    </div>
                    <ul>
                        @foreach ($productCategory as $category)
                        <li><a href="">{{ $category->name }}</a></li>           
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="d-block">
                <div class="input-group">
                    <div class="form-outline d-inline-block" >
                        <input type="search" style="padding: 10px 25px 10px 10px;" id="form1" class="form-control" />
                    </div>
                    <button type="button" class="btn" style="background: #FFA726;">
                        <i class="fas fa-search text-white"></i>
                    </button>                        
                </div>                
            </div>

            <div class="hero__search__phone ">
                <div class="hero__search__phone__icon">
                    <img src="{{ asset('images/zalo.png') }}" alt="">
                </div>
                <div class="hero__search__phone__text">
                    <span>+84 123 456 789</span>
                    <h5>Zalo</h5>
                </div>
            </div>
        </div>
    </div>
</section>