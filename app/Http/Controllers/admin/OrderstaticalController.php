<?php

namespace App\Http\Controllers\admin;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountOrderExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderstaticalController extends Controller
{
    public function index()
    {
        $animals = [
            ['STT' => 1, 'order' => 'Có vảy', 'species_count' => 39],
            ['STT' => 2, 'order' => 'Rùa', 'species_count' => 4],
            ['STT' => 3, 'order' => 'Cá chép', 'species_count' => 73],
            ['STT' => 4, 'order' => 'Cá kìm', 'species_count' => 2],
            ['STT' => 5, 'order' => 'Cá vược', 'species_count' => 20],
            ['STT' => 6, 'order' => 'Cá nheo', 'species_count' => 13],
            ['STT' => 7, 'order' => 'Mang liền', 'species_count' => 1],
            ['STT' => 8, 'order' => 'Gà', 'species_count' => 6],
        ];

        $plants = [
            ['STT' => 1, 'order' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'order' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'order' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'order' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'order' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'order' => 'Bèo ong', 'species_count' => 3],
            ['STT' => 7, 'order' => 'Tổ diều', 'species_count' => 22],
            ['STT' => 8, 'order' => 'Dương xỉ mộc', 'species_count' => 3],
            ['STT' => 9, 'order' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 10, 'order' => 'Guột', 'species_count' => 5],
            ['STT' => 11, 'order' => 'Ráng đa túc', 'species_count' => 62],
            ['STT' => 12, 'order' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return view('admin.statical.orderstatical', compact('animals', 'plants'));
        
    }
    public function exportexcel()
    {
        $animals = [
            ['STT' => 1, 'order' => 'Có vảy', 'species_count' => 39],
            ['STT' => 2, 'order' => 'Rùa', 'species_count' => 4],
            ['STT' => 3, 'order' => 'Cá chép', 'species_count' => 73],
            ['STT' => 4, 'order' => 'Cá kìm', 'species_count' => 2],
            ['STT' => 5, 'order' => 'Cá vược', 'species_count' => 20],
            ['STT' => 6, 'order' => 'Cá nheo', 'species_count' => 13],
            ['STT' => 7, 'order' => 'Mang liền', 'species_count' => 1],
            ['STT' => 8, 'order' => 'Gà', 'species_count' => 6],
        ];

        $plants = [
            ['STT' => 1, 'order' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'order' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'order' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'order' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'order' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'order' => 'Bèo ong', 'species_count' => 3],
            ['STT' => 7, 'order' => 'Tổ diều', 'species_count' => 22],
            ['STT' => 8, 'order' => 'Dương xỉ mộc', 'species_count' => 3],
            ['STT' => 9, 'order' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 10, 'order' => 'Guột', 'species_count' => 5],
            ['STT' => 11, 'order' => 'Ráng đa túc', 'species_count' => 62],
            ['STT' => 12, 'order' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return Excel::download(new CountOrderExport($animals, $plants), 'orderstatical.xlsx');
        
    }
}
