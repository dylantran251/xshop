@extends('layout.app')
@section('content')
    >
    <section class="breadcrumb-section set-bg" data-setbg="/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Bài viết</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <span>Bài viết</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar__item">
                        <h4>Danh mục bài viết</h4>
                        <ul>
                            <li><a href="#">Tất cả</a></li>
                            @foreach ($blogCategory as $Category)
                                <li><a href="#" style="color:#000"> {{ $Category->name }}</a></li>
                            @endforeach
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
                        <div class="">
                            <div class="blog__item">
                                <div class="blog__item__pic d-flex ">
                                    <div class=" m-2 col-lg-12 col-md-12 col-sm-12">
                                        <div class="pb-2 pb-2 pt-4 text-[#ccc] d-flex align-center"
                                            style="align-items: center;color:#999">
                                            <i class="fa-regular fa-calendar" style="margin-right:4px"></i>
                                            <span>{{ $item->created_at }}</span>
                                            <div style="margin-left:20px"><i class="fa-regular fa-comment"></i> 5</div>
                                        </div>
                                        <h4>{{ $item->title }}</h4>

                                        <img class="" style="width:100% ; height:65%;objectfit:cover;"
                                            src="{{ $item->image != null ? asset('images/blogs/' . $item->image) : asset('img/blog/blog-1.jpg') }}"
                                            alt="">

                                        <p class="pt-2 ">{{ $item->content }}</p>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
