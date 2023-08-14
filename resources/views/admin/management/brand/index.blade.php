@extends('admin.layout.app')
@section('title')
Management Category Blog
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header">
            <h3 class="p-0 ">Danh sách thương hiệu</h3>
            <div class="row justify-content-between">
                <div class="col">
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                    </div>
                </div>
                <div class="col">
                    <a href="{{ route('admin.management.brand.create') }}" class="btn btn-primary">Create New</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-nowrap">
                            <th class="col-2">Name</th>
                            <th class="text-center col-1">Status</th>
                            <th class="col-1 text-center">Hotline</th>
                            <th class="col-3">Address</th>
                            <th class="col-3">Description</th>
                            <th class="col-2 text-center">Action</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row align-items-center" >
                                            <img class="rounded-circle mr-3" width="48" height="48" src="{{ ($brand->image != null) ? asset('images/brands/'.$brand->image) : asset('img/blog/blog-1.jpg')}}"   alt="">
                                            <p class="fs-6 fw-bold text-black mb-0 text-truncate" style="max-width: 180px; display:inline-block;">{{ $brand->name }}</p>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle">
                                        <a href="" class="{{ ($brand->status == 1) ? 'btn p-0 bg-success' : 'btn p-0 bg-danger' }}">
                                            <span class="badge ">{{ ($brand->status == 1) ? 'Active' : 'Unactive' }}</span>
                                        </a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="">{{ $brand->hotline }}</a>
                                    </td>
                                    <td>
                                        <p class="m-0 text-justify" style="display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">
                                            {{ $brand->address }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="m-0 text-justify" style="display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">
                                            {{ $brand->description }}
                                        </p>
                                    </td>
                                    <th class="text-center align-middle">
                                        <div class="">
                                            <form action="{{ route('admin.management.brand.destroy', $brand->id) }}" method="POST">
                                                @csrf
                                                <a href="{{ route('admin.management.brand.edit', $brand->id) }}" class="btn btn-icon btn-outline-warning px-2 py-1 mx-1">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-icon btn-outline-danger px-2 py-1 mx-1">
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