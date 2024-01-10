<?php
// app/Http/Middleware/CheckAdminRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem người dùng có vai trò 'admin' không
        if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->hasRole('admin')) {
            return $next($request);
        }

        // Redirect hoặc xử lý theo ý của bạn nếu không có quyền admin

        return redirect()->route('admin.login'); // Ví dụ: chuyển hướng về trang chủ
    }
}
