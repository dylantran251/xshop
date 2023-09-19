@extends('layout.app')
@section('content')>
<header>
    <div class="mb-5 bg-primary">
        <div class="container py-1">
            <h4 class="text-white mt-2">Cửa hàng</h4>
            <nav class="d-flex mb-2">
                <h6 class="mb-0">
                    <a href="" class="text-white-50">Trang chủ</a>
                    <span class="text-white-50 mx-2"> / </span>
                    <a href="" class="text-white-50">Cửa hàng</a>
                </h6>
            </nav>
        </div>
    </div>
</header>
<!-- Blog Section Begin -->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar__item">
                    <h4>Danh mục bài viết</h4>
                    <ul>
                        <li><a href="#">Tất cả</a></li>
                        <li><a href="#">Sức khỏe (20)</a></li>
                        <li><a href="#">Thực phẩm (5)</a></li>
                        <li><a href="#">Đời sống (9)</a></li>
                    </ul>
                </div>
                <div class="blog__sidebar__item">
                    <h4>Bài viết nổi bật</h4>
                    <div class="blog__sidebar__recent">
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/sidebar/sr-1.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <h6>Ăn ngon mà không béo<br /> Khỏe và đẹp</h6>
                                <span>MAR 05, 2020</span>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/sidebar/sr-2.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <h6>Đồ ăn vặt tuổi thơ hot hit<br /> Vui khỏe mỗi ngày</h6>
                                <span>MAR 05, 2023</span>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="img/blog/sidebar/sr-3.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <h6>Tham quan nhà máy sản xuất bánh kẹo <br />Ngon mà khỏe</h6>
                                <span>MAR 05, 2022</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2023</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Những loại đồ ăn khô hot nhất hiện nay</a></h5>
                                <p> Ăn ngon mà khỏe là niềm vui của mỗi người </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-3.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2023</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Tham nhà nhà máy sản xuất bánh kẹo lớn nhất hiện nay</a></h5>
                                <p> Ăn ngon mà không lo về giá</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="img/blog/blog-1.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2023</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Đồ ăn vặt tuôi thơ niềm vui của mọi lứa tuổi</a></h5>
                                <p> Đồ ăn vặt không những ngon mà còn chất lượng </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection