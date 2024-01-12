<?php

namespace App\Http\Controllers\admin\statistic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhylumChartController extends Controller
{
    public function showChart()
    {
        $animalData = [
            'Có xương sống' => 587,
            'Thân mềm' => 1135,
        ];
        
        $plantData = [
            'Thông đất' => 14,
            'Mộc tặc' => 2,
            'Quyết lá thông' => 1,
            'Dương xỉ' => 143,
            'Thông' => 14,
            'Ngọc lan' => 1642,
        ];
        return view('admin.statical.phylumchart',compact('animalData','plantData'));
    }
}
