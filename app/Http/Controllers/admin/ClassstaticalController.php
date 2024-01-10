<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountClassExport;

class ClassstaticalController extends Controller
{
    public function index()
    {
        $animals = [
            ['STT' => 1, 'class' => 'Bò sát', 'species_count' => 43],
            ['STT' => 2, 'class' => 'Cá', 'species_count' => 109],
            ['STT' => 3, 'class' => 'Chim', 'species_count' => 314],
            ['STT' => 4, 'class' => 'Thú', 'species_count' => 86],
            ['STT' => 5, 'class' => 'Lưỡng cư', 'species_count' => 26],
            ['STT' => 6, 'class' => 'Côn trùng', 'species_count' => 1135],
        ];

        $plants = [
            ['STT' => 1, 'class' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'class' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'class' => 'Thủy cửu', 'species_count' => 10],
            ['STT' => 4, 'class' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'class' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'class' => 'Cỏ bợ', 'species_count' => 3],
            ['STT' => 7, 'class' => 'Ráng đa túc', 'species_count' => 123],
            ['STT' => 8, 'class' => 'Thông', 'species_count' => 12],
            ['STT' => 9, 'class' => 'Thông', 'species_count' => 12],
            ['STT' => 10, 'class' => 'Tuế', 'species_count' => 3],
            ['STT' => 11, 'class' => 'Ngọc lan', 'species_count' => 1441],
            ['STT' => 12, 'class' => 'Hành', 'species_count' => 217], // Thêm một lớp không xác định
        ];

        return view('admin.statical.classstatical', compact('plants', 'animals'));
        
    }
    public function exportexcel()
    {
        $animals = [
            ['STT' => 1, 'class' => 'Bò sát', 'species_count' => 43],
            ['STT' => 2, 'class' => 'Cá', 'species_count' => 109],
            ['STT' => 3, 'class' => 'Chim', 'species_count' => 314],
            ['STT' => 4, 'class' => 'Thú', 'species_count' => 86],
            ['STT' => 5, 'class' => 'Lưỡng cư', 'species_count' => 26],
            ['STT' => 6, 'class' => 'Côn trùng', 'species_count' => 1135],
        ];

        $plants = [
            ['STT' => 1, 'class' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'class' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'class' => 'Thủy cửu', 'species_count' => 10],
            ['STT' => 4, 'class' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'class' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'class' => 'Cỏ bợ', 'species_count' => 3],
            ['STT' => 7, 'class' => 'Ráng đa túc', 'species_count' => 123],
            ['STT' => 8, 'class' => 'Thông', 'species_count' => 12],
            ['STT' => 9, 'class' => 'Thông', 'species_count' => 12],
            ['STT' => 10, 'class' => 'Tuế', 'species_count' => 3],
            ['STT' => 11, 'class' => 'Ngọc lan', 'species_count' => 1441],
            ['STT' => 12, 'class' => 'Hành', 'species_count' => 217], // Thêm một lớp không xác định
        ];

        return Excel::download(new CountClassExport($plants, $animals), 'classstatical.xlsx');
        
    }
}
