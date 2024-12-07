<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Hiển thị form đăng nhập
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); // Lấy thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            $request->session()->regenerate(); // Tạo session mới
            return redirect()->intended('/admin'); // Chuyển hướng đến trang admin sau khi đăng nhập
        }
        // Đăng nhập thất bại
        return back()->withErrors(['email' => 'Thông tin đăng nhập không đúng.']); // Hiển thị lỗi
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

