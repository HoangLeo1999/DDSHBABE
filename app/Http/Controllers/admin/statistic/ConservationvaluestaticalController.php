<?php

namespace App\Http\Controllers\admin\statistic;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountConservationvalueExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConservationvaluestaticalController extends Controller
{
    public function index()
    {
        $conservationvls = [
            ['STT' => 1, 'conservationvalue' => 'Tuyệt chủng','colorClass' => 'ex-text', 'species_count' => 5],
            ['STT' => 2, 'conservationvalue' => 'Tuyệt chủng trong tự nhiên','colorClass' => 'ew-text', 'species_count' => 5],
            ['STT' => 3, 'conservationvalue' => 'Cực kỳ nguy cấp','colorClass' => 'cr-text', 'species_count' => 73],
            ['STT' => 4, 'conservationvalue' => 'Nguy cấp','colorClass' => 'en-text', 'species_count' => 2],
            ['STT' => 5, 'conservationvalue' => 'Sắp nguy cấp','colorClass' => 'vu-text', 'species_count' => 20],
            ['STT' => 6, 'conservationvalue' => 'Phụ thuộc bảo tồn','colorClass' => 'cd-text', 'species_count' => 13],
            ['STT' => 7, 'conservationvalue' => 'Ít nguy cấp','colorClass' => 'lr-text', 'species_count' => 1],
            ['STT' => 8, 'conservationvalue' => 'Sắp bị đe dọa','colorClass' => 'nt-text', 'species_count' => 6],
            ['STT' => 9, 'conservationvalue' => 'Ít quan tâm','colorClass' => 'lc-text', 'species_count' => 13],
            ['STT' => 10, 'conservationvalue' => 'Không được đánh giá','colorClass' => 'ne-text', 'species_count' => 1],
            ['STT' => 11, 'conservationvalue' => 'Thiếu dữ liệu','colorClass' => 'dd-text', 'species_count' => 6],
        ];

       

        return view('admin.statical.conservationvaluestatical', compact('conservationvls'));
        
    }
    public function exportexcel()
    {
        $conservationvls = [
            ['STT' => 1, 'conservationvalue' => 'Tuyệt chủng', 'species_count' => 5],
            ['STT' => 2, 'conservationvalue' => 'Tuyệt chủng trong tự nhiên', 'species_count' => 4],
            ['STT' => 3, 'conservationvalue' => 'Cực kỳ nguy cấp', 'species_count' => 73],
            ['STT' => 4, 'conservationvalue' => 'Nguy cấp', 'species_count' => 2],
            ['STT' => 5, 'conservationvalue' => 'Sắp nguy cấp', 'species_count' => 20],
            ['STT' => 6, 'conservationvalue' => 'Phụ thuộc bảo tồn', 'species_count' => 13],
            ['STT' => 7, 'conservationvalue' => 'Ít nguy cấp', 'species_count' => 1],
            ['STT' => 8, 'conservationvalue' => 'Sắp bị đe dọa', 'species_count' => 6],
            ['STT' => 9, 'conservationvalue' => 'Ít quan tâm', 'species_count' => 13],
            ['STT' => 10, 'conservationvalue' => 'Không được đánh giá', 'species_count' => 1],
            ['STT' => 11, 'conservationvalue' => 'Thiếu dữ liệu', 'species_count' => 6],
        ];


        return Excel::download(new CountConservationvalueExport($conservationvls,), 'conservationvaluestatical.xlsx');
        
    }
}
