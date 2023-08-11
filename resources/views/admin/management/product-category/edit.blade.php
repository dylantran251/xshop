@extends('admin.layout.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Category Product</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.management.product-category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="border rounded mb-3">
                    <div class="my-3 d-flex justify-content-center">
                        <img class="rounded" src="{{ ($category->image != null) ? asset('images/product-category/'.$category->image) : 'https://mdbootstrap.com/img/Photos/Others/placeholder.jpg' }} " alt="example placeholder" style="width: 250px;" />
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded">
                            <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                            <input type="file" name="image" class="form-control d-none" id="customFile1" />
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name-categoty" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name-category" value="{{ $category->name }}" placeholder="Enter name category">
                </div>
                <label for="">Status</label>
                <div class="mb-3 border rounded" style="padding: 6px; 12px;">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1" {{ ($category->status == 1) ? 'checked':'' }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                        Visiable
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="0" {{ ($category->status == 0) ? 'checked':'' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Hidden
                        </label>
                    </div>                
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter description category">{{ $category->description }}</textarea>
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