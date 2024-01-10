<?php
// app/Http/Controllers/Auth/AdminLoginController.php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/index'; // Đổi tùy thuộc vào trang bạn muốn chuyển hướng sau khi đăng nhập

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.login'); // Đảm bảo rằng trong `resources/views/auth` có tệp `admin-login.blade.php`
    }
    
    protected function guard()
    {
        return \Auth::guard('admin'); // Sử dụng guard có tên là 'admin'
    }
}
