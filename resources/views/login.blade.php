<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!-- Include Stylesheet -->
    @include ('frontend.components.styles')
    <!-- End Include Stylesheet -->
</head>

<body>
    <div class="login-container">
        <div class="login-image">
            <img src="{{asset('frontend/assets/imgs/nui_phu_si.jpg')}}" alt="Background Image">
        </div>
        <div class="login-form">
            <h2 class="form-title">Đăng Nhập</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf  <!-- Thêm CSRF token -->

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" value="{{ old('email') }}" required>  <!-- Thêm name="email" và value="{{ old('email') }}" -->
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>  <!-- Hiển thị lỗi -->
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required> <!-- Thêm name="password" -->
                </div>
                <button type="submit" class="btn btn-primary btn-login">Đăng Nhập</button>
                <p class="signup-link">Chưa có tài khoản? <a href="/register">Đăng ký ngay</a></p>
            </form>
        </div>
    </div>
    <!-- Include Javascript -->
    @include ('frontend.components.javascript')
    <!-- End Include Javascript -->
</body>

</html>