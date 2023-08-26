@extends('admin.layout.app')
@section('title')

@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header">
            <h3 class="p-0 ">Danh sách bài viết</h3>
            <div class="d-flex justify-content-between">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
                <div class="">
                    <a href="{{ route('admin.management.blogs.create') }}" class="btn bg-primary text-white"><i class="fa-solid fa-plus text-white pr-2"></i>Tạo mới</a>
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
                   
                </table>
            </div>
        </div>
    </div>
</div>
@endsection