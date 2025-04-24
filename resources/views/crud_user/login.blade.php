@extends('dashboard')

@section('content')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<main class="login-container">
    <div class="login-box">
        <h3>Đăng nhập</h3>
        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <input type="text" placeholder="Username" class="form-control" name="email" required>
            <input type="password" placeholder="Mật khẩu" class="form-control" name="password" required>
            <button type="submit" class="btn-login">Đăng Nhập</button>
            <a href="#">Quên mật khẩu</a>
        </form>
        <p class="footer-text">Lập trình back-end web 2 ©2025</p>
    </div>
</main>
@endsection