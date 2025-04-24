@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6 col-lg-4">
                <div class="card border p-4">
                    <h3 class="card-header text-center bg-white border-0">Màn hình đăng ký</h3>
                    <div class="card-body">
                        <form action="{{ route('user.postUser') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Username</label>
                                <input type="text" id="name" class="form-control" name="name" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Mật khẩu</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Nhập lại mật khẩu</label>
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email" required>
                            </div>
                            <div class="text-center mb-3">
                                <a href="#">Đã có tài khoản</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center mt-3">Lập trình web ©01/2024</p>
            </div>
        </div>
    </main>
@endsection