<?php

namespace App\Http\Controllers\admin;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountGenusExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenusstaticalController extends Controller
{
    public function index()
    {
        $animals = [
            ['STT' => 1, 'genus' => 'Tắc kè', 'species_count' => 4],
            ['STT' => 2, 'genus' => 'Nhông vảy', 'species_count' => 2],
            ['STT' => 3, 'genus' => 'Thằn lằn bóng', 'species_count' => 5],
            ['STT' => 4, 'genus' => 'Thằn lằn thực', 'species_count' => 1],
            ['STT' => 5, 'genus' => 'Trăn', 'species_count' => 1],
            ['STT' => 6, 'genus' => 'Rắn roi', 'species_count' => 1],
            ['STT' => 7, 'genus' => 'Cạp nia', 'species_count' => 4],
            ['STT' => 8, 'genus' => 'Trimeresurus', 'species_count' => 2],
        ];

        $plants = [
            ['STT' => 1, 'genus' => 'Psilotum', 'species_count' => 1],
            ['STT' => 2, 'genus' => 'Thông đất', 'species_count' => 1],
            ['STT' => 3, 'genus' => 'Selaginella', 'species_count' => 10],
            ['STT' => 4, 'genus' => 'Equiselum', 'species_count' => 2],
            ['STT' => 5, 'genus' => 'Helminthostachys', 'species_count' => 1],
            ['STT' => 6, 'genus' => 'Angiooteris', 'species_count' => 3],
            ['STT' => 7, 'genus' => 'Christellata', 'species_count' => 10],
            ['STT' => 8, 'genus' => 'Allantodia', 'species_count' => 3],
            ['STT' => 9, 'genus' => 'Cyathea', 'species_count' => 2],
            ['STT' => 10, 'genus' => 'Cibotium', 'species_count' => 1],
            ['STT' => 11, 'genus' => 'Rau vi', 'species_count' => 1],
            ['STT' => 12, 'genus' => 'Dicranopteris', 'species_count' => 7], // Thêm một lớp không xác định
        ];

        return view('admin.statical.genusstatical', compact('animals', 'plants'));
        
    }
    public function exportexcel()
    {
        $animals = [
            ['STT' => 1, 'genus' => 'Có vảy', 'species_count' => 39],
            ['STT' => 2, 'genus' => 'Rùa', 'species_count' => 4],
            ['STT' => 3, 'genus' => 'Cá chép', 'species_count' => 73],
            ['STT' => 4, 'genus' => 'Cá kìm', 'species_count' => 2],
            ['STT' => 5, 'genus' => 'Cá vược', 'species_count' => 20],
            ['STT' => 6, 'genus' => 'Cá nheo', 'species_count' => 13],
            ['STT' => 7, 'genus' => 'Mang liền', 'species_count' => 1],
            ['STT' => 8, 'genus' => 'Gà', 'species_count' => 6],
        ];

        $plants = [
            ['STT' => 1, 'genus' => 'Quyết lá thông', 'species_count' => 1],
            ['STT' => 2, 'genus' => 'Thông đất', 'species_count' => 4],
            ['STT' => 3, 'genus' => 'Quyển bá', 'species_count' => 10],
            ['STT' => 4, 'genus' => 'Cỏ bút tháp', 'species_count' => 2],
            ['STT' => 5, 'genus' => 'Lưỡi rẵn', 'species_count' => 1],
            ['STT' => 6, 'genus' => 'Bèo ong', 'species_count' => 3],
            ['STT' => 7, 'genus' => 'Tổ diều', 'species_count' => 22],
            ['STT' => 8, 'genus' => 'Dương xỉ mộc', 'species_count' => 3],
            ['STT' => 9, 'genus' => 'Ráng ất minh', 'species_count' => 1],
            ['STT' => 10, 'genus' => 'Guột', 'species_count' => 5],
            ['STT' => 11, 'genus' => 'Ráng đa túc', 'species_count' => 62],
            ['STT' => 12, 'genus' => 'Ráng dực xỉ', 'species_count' => 14], // Thêm một lớp không xác định
        ];

        return Excel::download(new CountGenusExport($animals, $plants), 'genusstatical.xlsx');
        
    }
}
