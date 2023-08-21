@extends('admin.layout.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Bạn có 50.000 đơn hàng mới! 🎉</h5>
                            <p class="mb-4">
                                Sale sập sàn hôm nay <span class="fw-bold">72%</span> 
                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="130" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-4">
            <div class="card h-100">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title mb-4">
                                <h5 class="text-nowrap mb-2">Lượt truy cập</h5>
                                <span class="badge bg-label-warning rounded-pill">Năm 2021</span>
                            </div>
                            <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                <h3 class="mb-0">500</h3>
                            </div>
                        </div>
                        <div id="profileReportChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Profit</span>
                    <h3 class="card-title mb-2">$12,628</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 mb-4">
            <div class="card">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                    <img src="{{ asset('assets/img/icons/unicons/wallet-info.png')}}" alt="chart success" class="rounded" />
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                </div>
                </div>
                <span class="fw-semibold d-block mb-1">Profit</span>
                <h3 class="card-title mb-2">$12,628</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span class="d-block mb-1">Payments</span>
                    <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                    <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Transactions</span>
                    <h3 class="card-title mb-2">$14,857</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-3">
        <div class="card-header">
            <h3 class="p-0 ">Đơn hàng chờ</h3>
            <div class="d-flex justify-content-between">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mã đơn hàng</th>
                            <th scope="col">Khách hàng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Phương thức thanh toán</th>
                            <th scope="col">Ghi chú</th>
                            <th scope="col">Xác nhận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>DHX74232423424</td>
                            <td>Trần Đức Hải</td>
                            <td>Chờ xác nhận</td>
                            <td>500.000đ</td>
                            <td>Thanh toán khi nhận hàng</td>
                            <td>Lấy cho em chân gà không cay nha</td>
                            <td>
                                <a href="" class="btn btn-icon btn-outline-success px-2 py-1 mr-1">
                                    <i class="fa-solid fa-check"></i>                                
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
@endsection