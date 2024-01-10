<?php

namespace App\Http\Controllers\admin;
use App\Models\Classes;
use App\Models\Family;
use App\Models\Order;
use App\Models\Phylum;
use App\Models\Genus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenusController extends Controller
{
    public function index()
    {
        $genus=Genus::all();
        $families=Family::all();
        $orders = Order::all();
        $classes = Classes::all();
        $phylums = Phylum::all();
        return view('admin.ddsh.genus', compact('genus','classes', 'phylums','orders','families'));
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'chi_vn' => 'required|string|max:255',
            'chi_latin' => 'required|string',
            'family_id'=>'required',
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

    public function getGenusById($id)
    {
        $families = Family::findOrFail($id);
        $phylums = Phylum::all();
        $classes = Classes::all();
        $orders = Order::all();

        return response()->json([$orders=>$orders,$classes=>$classes
        ,$phylums=>$phylums,$families=>$families]);
    }

    public function saveGenus(Request $request)
    {
   
        $genusID = $request->input('id');

        // Validate dữ liệu nếu cần

       
            // Nếu là chức năng chỉnh sửa, cập nhật thông tin tài khoản
            if ($genusID) {
                $genus = Family::findOrFail($genusID);
            } 
        // Cập nhật thông tin tài khoản từ dữ liệu form
        $genus->chi_vn = $request->input('ho_vn');
        $genus->chi_latin = $request->input('ho_latin');
        $genus->family_id = $request->input('family_id');
        $genus->order_id = $request->input('order_id');
        $genus->classes_id = $request->input('classes_id');
        $genus->phylum_id = $request->input('phylum_id');
        $genus->description = $request->input('description');
        $genus->slug = $request->input('slug');
        $genus->status = $request->input('status');
        // Các trường khác nếu cần

        $genus->save();

        return response()->json(['success' => true]);
    }
    public function destroyGenus($id)
    {
        try {
            $genus = Family::findOrFail($id);
            $genus->delete();
    
            return response()->json(['success' => true, 'message' => 'Xóa họ thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Xóa họ thất bại. Lỗi: ' . $e->getMessage()]);
        }
    }
}
