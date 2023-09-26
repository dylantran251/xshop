<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header text-center fw-bold"><h3>Đăng nhập</h3></div>

                  <div class="card">
                      <div class="card-body">
                        <form  class="mb-3" action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="full-name" class="form-label">Tên hiển thị</label>
                                <input type="text" name="full-name" class="form-control" placeholder="Nhập tên ..." autofocus/>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Nhập email ..." autofocus/>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu..." autofocus/>
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Xác nhận mật khẩu</label>
                                <input type="confirm-password" name="confirm-password" class="form-control" placeholder="Nhập lại mật khẩu..." autofocus/>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Đăng ký</button>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

