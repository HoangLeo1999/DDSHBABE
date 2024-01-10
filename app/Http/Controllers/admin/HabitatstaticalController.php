<?php

namespace App\Http\Controllers\admin;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountHabitatExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabitatstaticalController extends Controller
{
    public function index()
    {
        $animals = [
            ['STT' => 1, 'habitat' => 'Có vảy', 'species_count' => 39],
            ['STT' => 2, 'habitat' => 'Rùa', 'species_count' => 4],
            ['STT' => 3, 'habitat' => 'Cá chép', 'species_count' => 73],
            ['STT' => 4, 'habitat' => 'Cá kìm', 'species_count' => 2],
            ['STT' => 5, 'habitat' => 'Cá vược', 'species_count' => 20],
            ['STT' => 6, 'habitat' => 'Cá nheo', 'species_count' => 13],
            ['STT' => 7, 'habitat' => 'Mang liền', 'species_count' => 1],
            ['STT' => 8, 'habitat' => 'Gà', 'species_count' => 6],
        ];

        $plants = [
            ['STT' => 1, 'habitat' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'habitat' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'habitat' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'habitat' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'habitat' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'habitat' => 'Bèo ong', 'species_count' => 3],
            ['STT' => 7, 'habitat' => 'Tổ diều', 'species_count' => 22],
            ['STT' => 8, 'habitat' => 'Dương xỉ mộc', 'species_count' => 3],
            ['STT' => 9, 'habitat' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 10, 'habitat' => 'Guột', 'species_count' => 5],
            ['STT' => 11, 'habitat' => 'Ráng đa túc', 'species_count' => 62],
            ['STT' => 12, 'habitat' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return view('admin.statical.habitatstatical', compact('animals', 'plants'));
        
    }
    public function exportexcel()
    {
        $animals = [
            ['STT' => 1, 'habitat' => 'Có vảy', 'species_count' => 39],
            ['STT' => 2, 'habitat' => 'Rùa', 'species_count' => 4],
            ['STT' => 3, 'habitat' => 'Cá chép', 'species_count' => 73],
            ['STT' => 4, 'habitat' => 'Cá kìm', 'species_count' => 2],
            ['STT' => 5, 'habitat' => 'Cá vược', 'species_count' => 20],
            ['STT' => 6, 'habitat' => 'Cá nheo', 'species_count' => 13],
            ['STT' => 7, 'habitat' => 'Mang liền', 'species_count' => 1],
            ['STT' => 8, 'habitat' => 'Gà', 'species_count' => 6],
        ];

        $plants = [
            ['STT' => 1, 'habitat' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'habitat' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'habitat' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'habitat' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'habitat' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'habitat' => 'Bèo ong', 'species_count' => 3],
            ['STT' => 7, 'habitat' => 'Tổ diều', 'species_count' => 22],
            ['STT' => 8, 'habitat' => 'Dương xỉ mộc', 'species_count' => 3],
            ['STT' => 9, 'habitat' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 10, 'habitat' => 'Guột', 'species_count' => 5],
            ['STT' => 11, 'habitat' => 'Ráng đa túc', 'species_count' => 62],
            ['STT' => 12, 'habitat' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return Excel::download(new CountHabitatExport($animals, $plants), 'habitatstatical.xlsx');
        
    }
}
