@extends('admin.layout.app')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h5 mb-3 text-gray-800">Add Product</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Add Product</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.management.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="border rounded mb-3">
                    <div class="my-3 d-flex justify-content-center">
                        <img class="rounded img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" alt="example placeholder" style="max-width: 250px;" />
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded">
                            <label class="form-label text-white m-1" for="imgFile">Choose file</label>
                            <input type="file" name="image[]" class="form-control d-none" id="imgFile" multiple/>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name product">
                </div>


                <div class="mb-3 row">
                    <div class="col">
                        <label for="brand" class="form-label">Brand</label>
                        <select class="form-select" name="brand" aria-label="">
                            <option selected>Mặt hàng này của thương hiệu nào</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>  
                                @endforeach
                        </select>                        
                    </div>
                    <div class="col">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category" aria-label="">
                            <option selected>Mặt hàng này thuộc danh mục nào</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>  
                                @endforeach
                        </select>                        
                    </div>

                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control no-spin-icon" id="price" placeholder="Giá sản phẩm">
                </div>

                <label for="">Status</label>
                <div class="mb-3 border rounded" style="padding: 6px; 12px;">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">Stocking</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">Out Of Stock</label>
                    </div>                
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description category"></textarea>
                </div>

                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn bg-primary text-white mr-3" >Submit</button>
                    <a href="" class="btn bg-danger text-white">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection