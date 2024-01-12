<?php

namespace App\Http\Controllers\admin\statistic;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountFamilyExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilystaticalController extends Controller
{
    public function index()
    {
        $animals = [
            ['STT' => 1, 'family' => 'Tắc kè', 'species_count' => 6],
            ['STT' => 2, 'family' => 'Nhông', 'species_count' => 5],
            ['STT' => 3, 'family' => 'Thằn lằn bóng', 'species_count' => 6],
            ['STT' => 4, 'family' => 'Thằn lắn thực', 'species_count' => 1],
            ['STT' => 5, 'family' => 'Trăn', 'species_count' => 1],
            ['STT' => 6, 'family' => 'Trăn nước', 'species_count' => 29],
            ['STT' => 7, 'family' => 'Rắn hồ', 'species_count' => 5],
            ['STT' => 8, 'family' => 'Rắn lục', 'species_count' => 3],
        ];

        $plants = [
            ['STT' => 1, 'family' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'family' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'family' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'family' => 'Mộc tặc', 'species_count' => 2],
            ['STT' => 5, 'family' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'family' => 'Mã liệt', 'species_count' => 3],
            ['STT' => 7, 'family' => 'Ráng thư dực', 'species_count' => 13],
            ['STT' => 8, 'family' => 'Ráng gỗ nhỏ', 'species_count' => 9],
            ['STT' => 9, 'family' => 'Dương mộc xỉ', 'species_count' => 2],
            ['STT' => 10, 'family' => 'Lông cu li', 'species_count' => 1],
            ['STT' => 11, 'family' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 12, 'family' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp kht lớp không xác định
        ];

        return view('admin.statical.familystatical', compact('animals', 'plants'));
        
    }
    public function exportexcel()
    {
        $animals = [
            ['STT' => 1, 'family' => 'Tắc kè', 'species_count' => 6],
            ['STT' => 2, 'family' => 'Nhông', 'species_count' => 5],
            ['STT' => 3, 'family' => 'Thằn lằn bóng', 'species_count' => 6],
            ['STT' => 4, 'family' => 'Thằn lắn thực', 'species_count' => 1],
            ['STT' => 5, 'family' => 'Trăn', 'species_count' => 1],
            ['STT' => 6, 'family' => 'Trăn nước', 'species_count' => 29],
            ['STT' => 7, 'family' => 'Rắn hồ', 'species_count' => 5],
            ['STT' => 8, 'family' => 'Rắn lục', 'species_count' => 3],
        ];

        $plants = [
            ['STT' => 1, 'family' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'family' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'family' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'family' => 'Mộc tặc', 'species_count' => 2],
            ['STT' => 5, 'family' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'family' => 'Mã liệt', 'species_count' => 3],
            ['STT' => 7, 'family' => 'Ráng thư dực', 'species_count' => 13],
            ['STT' => 8, 'family' => 'Ráng gỗ nhỏ', 'species_count' => 9],
            ['STT' => 9, 'family' => 'Dương mộc xỉ', 'species_count' => 2],
            ['STT' => 10, 'family' => 'Lông cu li', 'species_count' => 1],
            ['STT' => 11, 'family' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 12, 'family' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return Excel::download(new CountFamilyExport($animals, $plants), 'familystatical.xlsx');
        
    }
}
