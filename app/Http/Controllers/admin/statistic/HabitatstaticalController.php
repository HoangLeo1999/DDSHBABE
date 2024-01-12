<?php

namespace App\Http\Controllers\admin\statistic;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountHabitatExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabitatstaticalController extends Controller
{
    public function index()
    {
        $habitats = [
            ['STT' => 1, 'habitat' => 'Rừng tự nhiên trên núi đá vôi và núi đất', 'species_count' => 881],
            ['STT' => 2, 'habitat' => 'Trảng cóe, trảng cây bụi', 'species_count' => 9],
            ['STT' => 3, 'habitat' => 'Đất canh tác nông nghiệp', 'species_count' => 1],
            ['STT' => 4, 'habitat' => 'Khu vực dân cư', 'species_count' => 126],
            ['STT' => 5, 'habitat' => 'Rừng trồng', 'species_count' => 20],
            ['STT' => 6, 'habitat' => 'Hồ', 'species_count' => 2],
            ['STT' => 7, 'habitat' => 'Sông', 'species_count' => 100],
            ['STT' => 8, 'habitat' => 'Suối', 'species_count' => 200],
        ];

        

        return view('admin.statical.habitatstatical', compact('habitats'));
        
    }
    public function exportexcel()
    {
        $habitats = [
            ['STT' => 1, 'habitat' => 'Rừng tự nhiên trên núi đá vôi và núi đất', 'species_count' => 881],
            ['STT' => 2, 'habitat' => 'Trảng cóe, trảng cây bụi', 'species_count' => 9],
            ['STT' => 3, 'habitat' => 'Đất canh tác nông nghiệp', 'species_count' => 1],
            ['STT' => 4, 'habitat' => 'Khu vực dân cư', 'species_count' => 126],
            ['STT' => 5, 'habitat' => 'Rừng trồng', 'species_count' => 20],
            ['STT' => 6, 'habitat' => 'Hồ', 'species_count' => 2],
            ['STT' => 7, 'habitat' => 'Sông', 'species_count' => 100],
            ['STT' => 8, 'habitat' => 'Suối', 'species_count' => 200],
        ];

      

        return Excel::download(new CountHabitatExport($habitats), 'habitatstatical.xlsx');
        
    }
}
