<?php

namespace App\Http\Controllers\admin\biodiversity;
use App\Models\Classes;
use App\Models\Family;
use App\Models\Order;
use App\Models\Phylum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        $families=Family::all();
        $orders = Order::all();
        $classes = Classes::all();
        $phylums = Phylum::all();
        return view('admin.ddsh.family', compact('classes', 'phylums','orders','families'));
    }
    public function addFamily(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'ho_vn' => 'required|string|max:255',
            'ho_latin' => 'required|string',
            'order_id'=>'required',
            'classes_id'=>'required',
            'phylum_id'=>'required',
            'description' => 'required',
            'status' => 'required|in:active,inactive',// Đảm bảo 'roles' là một mảng
        ]);

        // Create a new user
    $families = Family::create($validatedData);

    // Attach roles to the user
        // Return a success response
        return response()->json(['message' => 'Thêm thành công', 'family' => $families], 200);
    }
    // Các phương thức khác

    public function getFamilyById($id)
    {
         try {
            $families = Family::findOrFail($id);
            $orders = Order::all();
            $classes = Classes::all();
            $phylums = Phylum::all();
    
            return response()->json([
                'families'=>$families,
                'orders' => $orders,
                'classes' => $classes,
                'phylums' => $phylums
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Class not found.'], 404);
        }
    }

    public function saveFamily(Request $request)
    {
   
        $familyID = $request->input('id');

        // Validate dữ liệu nếu cần

       
            // Nếu là chức năng chỉnh sửa, cập nhật thông tin tài khoản
            if ($familyID) {
                $families = Family::findOrFail($familyID);
            } 
        // Cập nhật thông tin tài khoản từ dữ liệu form
        $families->ho_vn = $request->input('ho_vn');
        $families->ho_latin = $request->input('ho_latin');
        $families->order_id = $request->input('order_id');
        $families->classes_id = $request->input('classes_id');
        $families->phylum_id = $request->input('phylum_id');
        $families->description = $request->input('description');
        $families->slug = $request->input('slug');
        $families->status = $request->input('status');
        // Các trường khác nếu cần

        $families->save();

        return response()->json(['success' => true]);
    }
    public function destroyFamily($id)
    {
        try {
            $families = Family::findOrFail($id);
            $families->delete();
    
            return response()->json(['success' => true, 'message' => 'Xóa họ thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Xóa họ thất bại. Lỗi: ' . $e->getMessage()]);
        }
    }
}
