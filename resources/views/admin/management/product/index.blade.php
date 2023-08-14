@extends('admin.layout.app')
@section('title')
Management Category Blog
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header">
            <h3 class="p-0 ">Danh sách sản phẩm</h3>
            <div class="d-flex justify-content-between">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="">
                    <a href="{{ route('admin.management.product.create') }}" class="btn bg-primary text-white"><i class="fa-solid fa-plus text-white pr-2"></i>Add new</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="">
                            <th class="col-3">Name</th>
                            <th class="text-center col-1">Status</th>
                            <th class="col-2 text-center">Brand</th>
                            <th class="col-1">Price</th>
                            <th class="col-3">Description</th>
                            <th class="col-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            @php
                                $category = App\Models\ProductCategory::findOrFail($product->product_category_id);
                                $brand = App\Models\Brand::findOrFail($product->brand_id);
                                $priceVND = number_format($product->price, 0, ',', '.') . 'đ';
                                $images = $product->image;
                                $subImg = explode("|", $images);
                            @endphp
                            <tr class="">
                                <td>
                                    <div class="d-flex flex-row align-items-start" >
                                        <img class="rounded mr-3" width="84" height="72" src="{{ ($subImg != null) ? asset('images/products/'.$subImg[0]) : asset('img/blog/blog-1.jpg')}}" alt="">
                                        <div class="d-flex flex-column" >
                                            <p class="fs-6 fw-bold text-black mb-2 text-truncate" style="max-width: 180px; display:inline-block;">{{ $product->name }}</p>
                                            <div class="d-flex flex-column ">
                                                <span style="font-size: 13px; fst-italic">Category:</span>
                                                <a href="" class="align-bottom link-info" style="font-size: 14px;">{{ $category->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center align-middle">
                                    <a href="" class="{{ ($product->status == 1) ? 'btn p-0 bg-success' : 'btn p-0 bg-danger' }} ">
                                        <span class="badge ">{{ ($product->status == 1) ? 'Stocking' : 'Out of stock'}}</span>
                                    </a>
                                </td>
                                <td class="text-center align-middle">{{ $brand->name }}</td>
                                <td class="align-middle">{{ $priceVND }}</td>

                                <td class="align-middle ">
                                    <p class="m-0 text-justify" style="display: -webkit-box; -webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;">
                                        {{ $product->description }}
                                    </p>
                                </td>
                                <th class="text-center align-middle">
                                    <div class="">
                                        <form action="{{ route('admin.management.product.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            <a href="{{ route('admin.management.product.edit', $product->id) }}" class="btn btn-icon btn-outline-warning px-2 py-1 mr-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            @method("DELETE")
                                            <button type="button" class="btn btn-icon btn-outline-danger px-2 py-1">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>                                            
                                        </form>

                                    </div>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection