<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Truyền dữ liệu tìm kiếm đến view
      
        return view('help.index', ['query' => $query]);//Tên view có thể là 'help.index' hoặc bất cứ tên nào bạn chọn.
    }
   
    
}
