<?php

namespace App\Http\Controllers\admin\biodiversity;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use App\Models\Phylum;
use App\Models\Classes;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        
        $classes = Classes::all();
        $phylums = Phylum::all();
        return view('admin.ddsh.class', compact('classes', 'phylums'));
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'lop_vn' => 'required|string|max:255',
                'lop_latin' => 'required|string',
                'phylum_id' => 'required',
                'description' => 'required',
                'status' => 'required|in:active,inactive',// Đảm bảo 'roles' là một mảng
            ]);
           
            // Create a new user
        $classes = Classes::create($validatedData);
        return response()->json(['message' => 'Thêm thành công', 'class' => $classes], 200);
    
    
        } catch (QueryException $e) {
            \Log::error('Error storing data: ' . $e->getMessage());
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
        // Validate the form data
       
    // Attach roles to the user
        // Return a success response
        
    }
    // Các phương thức khác

    public function getClassById($id)
    {
        try {
            $classes = Classes::findOrFail($id);
            $phylums = Phylum::all();
    
            return response()->json([
                'classes' => $classes,
                'phylums' => $phylums
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Class not found.'], 404);
        }
    }

    public function saveClass(Request $request,$id)
    {
   
        
    try {
        // Nội dung phương thức update
        $class = Classes::findOrFail($id);
        
        // Cập nhật thông tin tài khoản từ dữ liệu form
        $class->lop_vn = $request->input('lop_vn');
        $class->lop_latin = $request->input('lop_latin');
        $class->phylum_id = $request->input('phylum_id');
        $class->description = $request->input('description');
        $class->slug = $request->input('slug');
        $class->status = $request->input('status');
        
        $class->save();

        // Lấy lại dữ liệu sau khi lưu để trả về cho view
        $updatedClass = Classes::findOrFail($id);
        $phylums = Phylum::all();

        return response()->json([
            'success' => true,
            'updatedClass' => $updatedClass,
            'phylums' => $phylums
        ]);
    } catch (QueryException $e) {
        \Log::error('Error updating data: ' . $e->getMessage());
        return response()->json(['message' => 'Internal Server Error'], 500);
    } catch (\Exception $e) {
        \Log::error('Error updating data: ' . $e->getMessage());
        return response()->json(['message' => 'Internal Server Error'], 500);
    }
}
    public function destroyClass($id)
    {
        try {
            $classes = Classes::findOrFail($id);
            $classes->delete();
    
            return response()->json(['success' => true, 'message' => 'Xóa lớp thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Xóa lớp thất bại. Lỗi: ' . $e->getMessage()]);
        }
    }
}
