<?php

namespace App\Http\Controllers\admin\biodiversity;
use App\Models\Order;
use App\Models\Classes;
use App\Models\Phylum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class OrderController extends Controller
{
    public function index()
    {
        
        $orders = Order::all();
        $classes = Classes::all();
        $phylums = Phylum::all();
        return view('admin.ddsh.order', compact('classes', 'phylums','orders'));
    }
    public function store(Request $request)
    {
        // Validate the form data

        // Create a new user
   

    // Attach roles to the user
        // Return a success response
       
        try {
            $validatedData = $request->validate([
                'bo_vn' => 'required|string|max:255',
                'bo_latin' => 'required|string',
                'classes_id'  =>'required',
                'phylum_id'  =>'required',
                'description' => 'required',
                'status' => 'required|in:active,inactive',// Đảm bảo 'roles' là mộ
            ]);
           
            // Create a new user
            $orders = Order::create($validatedData);
            return response()->json(['message' => 'Thêm thành công', 'order' => $orders], 200);
    
    
        } catch (QueryException $e) {
            \Log::error('Error storing data: ' . $e->getMessage());
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }
    
    // Các phương thức khác

    public function getOrderById($id)
    {
       
       
        try {
            $orders = Order::findOrFail($id);
            $classes = Classes::all();
            $phylums = Phylum::all();
    
            return response()->json([
                'orders' => $orders,
                'classes' => $classes,
                'phylums' => $phylums
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Class not found.'], 404);
        }
    }

    public function saveOrder(Request $request)
    {
   
        $orderID = $request->input('id');

        // Validate dữ liệu nếu cần

       
            // Nếu là chức năng chỉnh sửa, cập nhật thông tin tài khoản
            if ($orderID) {
                $orders = Order::findOrFail($orderID);
            } 
        // Cập nhật thông tin tài khoản từ dữ liệu form
        $orders->bo_vn = $request->input('bo_vn');
        $orders->bo_latin = $request->input('bo_latin');
        $orders->classes_id = $request->input('classes_id');
        $orders->phylum_id = $request->input('phylum_id');
        $orders->description = $request->input('description');
        $orders->slug = $request->input('slug');
        $orders->status = $request->input('status');
        // Các trường khác nếu cần

        $orders->save();

        return response()->json(['success' => true]);
    }
    public function destroyOrder($id)
    {
        try {
            $orders = Order::findOrFail($id);
            $orders->delete();
    
            return response()->json(['success' => true, 'message' => 'Xóa bộ thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Xóa bộ thất bại. Lỗi: ' . $e->getMessage()]);
        }
    }
}
