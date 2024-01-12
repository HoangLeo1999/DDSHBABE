<?php

namespace App\Http\Controllers\admin\biodiversity;
use App\Models\Classes;
use App\Models\Family;
use App\Models\Genus;
use App\Models\Order;
use App\Models\Phylum;
use App\Models\Species;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    public function index()
    {
        $species=Species::all();
        $genus=Genus::all();
        $families=Family::all();
        $orders = Order::all();
        $classes = Classes::all();
        $phylums = Phylum::all();
        return view('admin.ddsh.species', compact('species','genus','classes', 'phylums','orders','families'));
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'loai_vn' => 'required|string|max:255',
            'loai_latin' => 'required|string',
            'genus_id'=>'required',
            'family_id'=>'required',
            'order_id'=>'required',
            'classes_id'=>'required',
            'phylum_id'=>'required',
            'description' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new 
    $species = Species::create($validatedData);

    // Attach roles to the user
        // Return a success response
        return response()->json(['message' => 'Thêm thành công', 'species' => $species], 200);
    }
    // Các phương thức khác

    public function getSpeciesById($id)
    {
        try {
            $species = Species::findorFail($id);
            $genus = Genus::all();
            $families = Family::all();
            $orders = Order::all();
            $classes = Classes::all();
            $phylums = Phylum::all();
    
            return response()->json([
                'species'=>$species,
                'genus'=>$genus,
                'families'=>$families,
                'orders' => $orders,
                'classes' => $classes,
                'phylums' => $phylums
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Class not found.'], 404);
        }
    }

    public function saveSpecies(Request $request)
    {
   
        $speciesID = $request->input('id');

        // Validate dữ liệu nếu cần

       
            // Nếu là chức năng chỉnh sửa, cập nhật thông tin tài khoản
            if ($speciesID) {
                $species = Species::findOrFail($speciesID);
            } 
        // Cập nhật thông tin tài khoản từ dữ liệu form
        $species->loai_vn = $request->input('loai_vn');
        $species->loai_latin = $request->input('loai_latin');
        $species->genus_id = $request->input('genus_id');
        $species->family_id = $request->input('family_id');
        $species->order_id = $request->input('order_id');
        $species->classes_id = $request->input('classes_id');
        $species->phylum_id = $request->input('phylum_id');
        $species->description = $request->input('description');
        $species->slug = $request->input('slug');
        $species->status = $request->input('status');
        // Các trường khác nếu cần

        $species->save();

        return response()->json(['success' => true]);
    }
    public function destroySpecies($id)
    {
        try {
            $species = Species::findOrFail($id);
            $species->delete();
    
            return response()->json(['success' => true, 'message' => 'Xóa loài thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Xóa loài thất bại. Lỗi: ' . $e->getMessage()]);
        }
    }
    
}
