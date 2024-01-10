<?php

namespace App\Http\Controllers\admin;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountConservationvalueExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConservationvaluestaticalController extends Controller
{
    public function index()
    {
        $animals = [
            ['STT' => 1, 'conservationvalue' => 'Có vảy', 'species_count' => 39],
            ['STT' => 2, 'conservationvalue' => 'Rùa', 'species_count' => 4],
            ['STT' => 3, 'conservationvalue' => 'Cá chép', 'species_count' => 73],
            ['STT' => 4, 'conservationvalue' => 'Cá kìm', 'species_count' => 2],
            ['STT' => 5, 'conservationvalue' => 'Cá vược', 'species_count' => 20],
            ['STT' => 6, 'conservationvalue' => 'Cá nheo', 'species_count' => 13],
            ['STT' => 7, 'conservationvalue' => 'Mang liền', 'species_count' => 1],
            ['STT' => 8, 'conservationvalue' => 'Gà', 'species_count' => 6],
        ];

        $plants = [
            ['STT' => 1, 'conservationvalue' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'conservationvalue' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'conservationvalue' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'conservationvalue' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'conservationvalue' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'conservationvalue' => 'Bèo ong', 'species_count' => 3],
            ['STT' => 7, 'conservationvalue' => 'Tổ diều', 'species_count' => 22],
            ['STT' => 8, 'conservationvalue' => 'Dương xỉ mộc', 'species_count' => 3],
            ['STT' => 9, 'conservationvalue' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 10, 'conservationvalue' => 'Guột', 'species_count' => 5],
            ['STT' => 11, 'conservationvalue' => 'Ráng đa túc', 'species_count' => 62],
            ['STT' => 12, 'conservationvalue' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return view('admin.statical.conservationvaluestatical', compact('animals', 'plants'));
        
    }
    public function exportexcel()
    {
        $animals = [
            ['STT' => 1, 'conservationvalue' => 'Có vảy', 'species_count' => 39],
            ['STT' => 2, 'conservationvalue' => 'Rùa', 'species_count' => 4],
            ['STT' => 3, 'conservationvalue' => 'Cá chép', 'species_count' => 73],
            ['STT' => 4, 'conservationvalue' => 'Cá kìm', 'species_count' => 2],
            ['STT' => 5, 'conservationvalue' => 'Cá vược', 'species_count' => 20],
            ['STT' => 6, 'conservationvalue' => 'Cá nheo', 'species_count' => 13],
            ['STT' => 7, 'conservationvalue' => 'Mang liền', 'species_count' => 1],
            ['STT' => 8, 'conservationvalue' => 'Gà', 'species_count' => 6],
        ];

        $plants = [
            ['STT' => 1, 'conservationvalue' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'conservationvalue' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'conservationvalue' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'conservationvalue' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'conservationvalue' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'conservationvalue' => 'Bèo ong', 'species_count' => 3],
            ['STT' => 7, 'conservationvalue' => 'Tổ diều', 'species_count' => 22],
            ['STT' => 8, 'conservationvalue' => 'Dương xỉ mộc', 'species_count' => 3],
            ['STT' => 9, 'conservationvalue' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 10, 'conservationvalue' => 'Guột', 'species_count' => 5],
            ['STT' => 11, 'conservationvalue' => 'Ráng đa túc', 'species_count' => 62],
            ['STT' => 12, 'conservationvalue' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return Excel::download(new CountConservationvalueExport($animals, $plants), 'conservationvaluestatical.xlsx');
        
    }
}
