@extends('layout.app')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center fw-bold"><h3>Đăng nhập</h3></div>

                <div class="card">
                    <div class="card-body">
                      <form  class="mb-3" action="{{route('auth.login.authenticate')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="Nhập email ..." autofocus/>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Mật khẩu</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu ..." autofocus/>
                        </div>
                        
                        <div class="mb-5 d-flex justify-content-between">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me" />
                            <label class="form-check-label" for="remember-me"> Ghi nhớ đăng nhập  </label>
                          </div>
                          <div>
                            <a href="">Quên mật khẩu?</a>
                          </div>
                        </div>
                        <div class="mb-3">
                          <button class="btn btn-primary d-grid w-100" type="submit">Đăng nhập</button>
                        </div>
                      </form>
        
                      <p class="text-center">
                        <span>Bạn chưa có tài khoản?</span>
                        <a href="">
                          <span>Đăng ký ngay</span>
                        </a>
                      </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
