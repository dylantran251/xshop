@extends('layout.app')
@section('content')
<!--Main Navigation-->
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
  
  <!-- sidebar + content -->
<section class="">
    <div class="container">
        <div class="row">
        <!-- sidebar -->
            <div class="col-lg-3">
                <!-- Collapsible wrapper -->
                <div class="collapse card d-lg-block" id="navbarSupportedContent">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Danh mục
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                <div class="accordion-body">
                                    @if(session()->has('productCategory'))
                                        @foreach (session('productCategory') as $category)
                                        <div class="p-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="flexCheckChecked1"/>
                                                <label class="form-check-label" for="flexCheckChecked1">{{ $category->name }}</label>
                                            </div>
                                        </div>     
                                        @endforeach                              
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                    
                                Thương hiệu
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                                <div class="accordion-body">
                                    @foreach ($brands as $brand)
                                        <div class="p-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $brand->id }}" id="flexCheckChecked1"/>
                                                <label class="form-check-label" for="flexCheckChecked1">{{ $brand->name }}</label>
                                            </div>
                                        </div>                                
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" >
                                Giá 
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <p class="mb-0">
                                                Thấp nhất
                                            </p>
                                        <div class="form-outline">
                                    <input type="number" id="typeNumber" class="form-control" placeholder="0đ"/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0">
                                        Lớn nhất
                                    </p>
                                    <div class="form-outline">
                                        <input type="number" id="typeNumber" class="form-control" placeholder="10.000.000đ"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            Đánh giá
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                    <label class="form-check-label" for="flexCheckDefault">
                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    </label>
                                </div>
                                 <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                    <label class="form-check-label" for="flexCheckDefault">
                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    </label>
                                </div>
                                <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                    <label class="form-check-label" for="flexCheckDefault">
                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    </label>
                                </div>
                                <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                    <label class="form-check-label" for="flexCheckDefault">
                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <button type="button" class="btn btn-white w-100 border border-secondary mb-5 mt-2">Tìm kiếm</button>
         </div>
        <!-- sidebar -->
        <!-- content -->
        <div class="col-lg-9">
            <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                <strong class="d-block py-2">32 sản phẩm</strong>
                <div class="ms-auto">
                    <div class="btn-group shadow-0 border">
                        <a href="#" class="btn btn-light" title="List view">
                            <i class="fa fa-bars fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-light active" title="Grid view">
                            <i class="fa fa-th fa-lg"></i>
                        </a>
                    </div>
                </div>
            </header>

            <div class="row">
                @foreach ($products as $product)
                    @php
                        $price = number_format($product->price, 0, ',', '.');
                        $images = explode("|", $product->image);
                    @endphp
                    <div class="col-lg-3 col-md-4 col-sm-4 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="{{ ($images) ? asset('images/products/'.$images[0]) : ' ' }}" height="190" class="card-img-top border-bottom" />
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <h6 class="mb-1 me-1">Giá: {{ $price }}đ</h6>
                                </div>
                                <p class="card-text m-0" style="display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">{{ $product['name'] }}</p>
                                <div class="d-flex align-items-end justify-content-between h-100">
                                    <a href="{{ route('shop.product-details', $product->id) }}" class="btn btn-primary shadow-0 me-1" style="font-size: 13px;"><i class="fa-solid fa-eye"></i></a>
                                    <a href="" class="btn btn-danger shadow-0 me-1" style="font-size: 13px;"><i class="fa-solid fa-heart"></i></a>
                                    <a href="{{ route('shop.add-product-to-cart', $product->id) }}" class="btn btn-success shadow-0 me-1" style="font-size: 13px;"><i class="fa-solid fa-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            

            <!-- Pagination -->
                <nav aria-label="Page navigation example" class="d-flex justify-content-end my-4">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            <!-- Pagination -->
            </div>
        </div>
    </div>            
</section>
  <!-- sidebar + content -->
@endsection

