<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthRegisteredUserController extends Controller
{
    public function create()
    {
        return view('register'); // Trả về view đăng ký của bạn
    }

    public function store(Request $request)
    {
        // Validate dữ liệu từ form
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // ... thêm các rule validation khác nếu cần
        ]);


        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput(); // Giữ lại dữ liệu đã nhập
        }




        // Tạo user mới
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            // ... thêm các trường khác nếu cần
        ]);


        // Chuyển hướng sau khi đăng ký thành công
        return redirect('/')->with('success', 'Đăng ký thành công!'); // Ví dụ chuyển hướng về trang chủ
    }
}
