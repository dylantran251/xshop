@extends('admin.layout.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary text-uppercase">From create new brand</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.management.brand.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="border rounded mb-3">
                    <div class="my-3 d-flex justify-content-center">
                        <img class="rounded" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" alt="example placeholder" style="width: 250px;" />
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded">
                            <label class="form-label text-white m-1" for="imgFile">Choose file</label>
                            <input type="file" name="image" class="form-control d-none" id="imgFile" />
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name-categoty" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name-category" placeholder="Enter name category">
                </div>
                <label for="">Status</label>
                <div class="mb-3 border rounded" style="padding: 6px; 12px;">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">Active</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">Unactive</label>
                    </div>                
                </div>

                <div class="mb-3">
                    <label for="hotline" class="form-label">Hotline</label>
                    <input type="tel" name="hotline" class="form-control" id="hotline" placeholder="Enter hotline your brand">
                </div>

                <div class="row mb-3 form-group">
                    <label for="address">Address</label>
                    <div class="d-flex justify-content-between">
                        <input type="text" class="form-control mr-2" name="address1" id="address" placeholder="Thôn, Xóm...">
                        <input type="text" class="form-control mx-2" name="address2" id="address"  placeholder="Xã, Phường...">
                        <input type="text" class="form-control mx-2" name="address3" id="address" placeholder="Quận, Huyện...">
                        <input type="text" class="form-control ml-2" name="address4" id="address" placeholder="Tỉnh, Thành phố...">
                    </div>
                  </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description category"></textarea>
                </div>

                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn bg-primary text-white mx-3" >Submit</button>
                    <button type="button" class="btn bg-danger text-white">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection