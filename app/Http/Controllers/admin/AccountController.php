<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AccountController extends Controller
{
    public function showView()
    {
        $roles = Role::all();
        $accounts = User::all();

        return view('admin.account', ['accounts' => $accounts],['roles'=>$roles]);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'roles' => 'required|array', // Đảm bảo 'roles' là một mảng
        ]);

        // Create a new user
    $user = User::create($validatedData);

    // Attach roles to the user
    if ($request->has('roles')) {
        $user->roles()->attach($request->input('roles'));
    }

        // Return a success response
        return response()->json(['message' => 'User added successfully', 'user' => $user], 200);
    }
    // Các phương thức khác

    public function getAccountById($id)
    {
        $account = User::findOrFail($id);

        return response()->json($account);
    }

    public function saveAccount(Request $request)
    {
   
        $accountId = $request->input('id');

        // Validate dữ liệu nếu cần

       
            // Nếu là chức năng chỉnh sửa, cập nhật thông tin tài khoản
            if ($accountId) {
                $account = User::findOrFail($accountId);
            } 
        // Cập nhật thông tin tài khoản từ dữ liệu form
        $account->name = $request->input('name');
        $account->email = $request->input('email');
        // Các trường khác nếu cần

        $account->save();

        return response()->json(['success' => true]);
    }
    public function destroyAccount($id)
    {
        try {
            $account = User::findOrFail($id);
            $account->delete();
    
            return response()->json(['success' => true, 'message' => 'Xóa tài khoản thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Xóa tài khoản thất bại. Lỗi: ' . $e->getMessage()]);
        }
    }
}
