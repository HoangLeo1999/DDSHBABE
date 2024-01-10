<?php

namespace App\Http\Controllers\admin;

use App\Models\Phylum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhylumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phylums = Phylum::all();
        return view('admin.ddsh.phylum', ['phylums' => $phylums]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nganh_vn' => 'required|string|max:255',
            'nganh_latin' => 'required|string',
            'description' => 'required',
            'status' => 'required|in:active,inactive',// Đảm bảo 'roles' là một mảng
        ]);

        // Create a new user
    $phylums = Phylum::create($validatedData);

    // Attach roles to the user
        // Return a success response
        return response()->json(['message' => 'Thêm thành công', 'phylum' => $phylums], 200);
    }
    // Các phương thức khác

    public function getPhylumById($id)
    {
        $phylums = Phylum::findOrFail($id);

        return response()->json($phylums);
    }

    public function savePhylum(Request $request)
    {
   
        $phylumID = $request->input('id');

        // Validate dữ liệu nếu cần

       
            // Nếu là chức năng chỉnh sửa, cập nhật thông tin tài khoản
            if ($phylumID) {
                $phylums = Phylum::findOrFail($phylumID);
            } 
        // Cập nhật thông tin tài khoản từ dữ liệu form
        $phylums->nganh_vn = $request->input('nganh_vn');
        $phylums->nganh_latin = $request->input('nganh_latin');
        $phylums->description = $request->input('description');
        $phylums->slug = $request->input('slug');
        $phylums->status = $request->input('status');
        // Các trường khác nếu cần

        $phylums->save();

        return response()->json(['success' => true]);
    }
    public function destroyPhylum($id)
    {
        try {
            $phylums = Phylum::findOrFail($id);
            $phylums->delete();
    
            return response()->json(['success' => true, 'message' => 'Xóa tài khoản thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Xóa tài khoản thất bại. Lỗi: ' . $e->getMessage()]);
        }
    }
}
