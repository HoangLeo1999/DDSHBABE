<?php

namespace App\Http\Controllers\admin;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function showView()
    {
        $accounts = Role::all();

        return view('admin.roles', ['accounts' => $accounts]);
    }

    public function addRole(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'guard_name' => 'required|string|max:255',
            // Thêm các quy tắc xác nhận khác nếu cần thiết
        ]);

        $role = Role::create($validatedData);
        // Thêm các trường khác cần thiết
      

        return response()->json(['message' => 'User added successfully', 'role' => $role], 200);
    }
    // Các phương thức khác

    public function getRoleById($id)
    {
        $account = Role::findOrFail($id);

        return response()->json($account);
    }

    public function saveRole(Request $request)
    {
        $accountId = $request->input('id');
       

        // Validate dữ liệu nếu cần

        if ($accountId) {
            $account = Role::findOrFail($accountId);
        } 

        // Cập nhật thông tin tài khoản từ dữ liệu form
        $account->name = $request->input('name');
        $account->guard_name = $request->input('guard_name');
        // Các trường khác nếu cần

        $account->save();

        return response()->json(['success' => true]);
    }
    public function destroyrole($id)
    {
        $account = Role::findOrFail($id);
        $account->delete();

        return redirect()->route('admin.roles');
    }
}
