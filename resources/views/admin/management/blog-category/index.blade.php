@extends('admin.layout.app')
@section('title')

@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header">
            <h3 class="p-0 ">Danh mục bài viết</h3>
            <div class="d-flex justify-content-between">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
                <div class="">
                    <a href="{{ route('admin.management.blog-category.create') }}" class="btn bg-primary text-white"><i class="fa-solid fa-plus text-white pr-2"></i>Tạo mới</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="">
                            <th class="col-3">Tiêu đề </th>
                            <th class="text-center col-1">Trạng thái</th>
                            <th class="col-2 text-center">Ảnh bài viết</th>
                            <th class="col-3">Mô tả</th>
                            <th class="col-2 text-center">Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row align-items-center" >
                                            <p class="fs-6 fw-bold text-black mb-0 text-truncate" style="max-width: 180px; display:inline-block;">{{ $item->name }}</p>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle">
                                        <a href="" class="{{ ($item->status == 1) ? 'btn p-0 bg-success' : 'btn p-0 bg-danger' }}">
                                            <span class="badge ">{{ ($item->status == 1) ? 'Active' : 'Unactive' }}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <img class="rounded-circle mr-3" width="48" height="48" src="{{ ($item->image != null) ? asset('images/blog-category/'.$item->image) : asset('img/blog/blog-1.jpg')}}"   alt="">
                                    </td>
                                    <td>
                                        <p class="m-0 text-justify" style="display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">
                                            {{ $item->description }}
                                        </p>
                                    </td>
                                    <th class="text-center align-middle">
                                        <div class="">
                                            <form action="{{ route('admin.management.blog-category.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                <a href="{{route('admin.management.blog-category.edit',$item->id)}}" class="btn btn-icon btn-outline-warning px-2 py-1 mx-1">
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