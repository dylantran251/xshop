<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục sản phẩm</span>
                    </div>
                    <ul>
                        @foreach ($productCategory as $category)
                        <li><a href="">{{ $category->name }}</a></li>           
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            {{-- <div class="hero__search__categories">
                               Tìm kiếm
                                <span class="arrow_carrot-down"></span>
                            </div> --}}
                            <input type="text" placeholder="Tìm kiếm ở đây...">
                            <button type="submit" class="site-btn">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <span>+84 123 456 789</span>
                            <h5>Zalo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>