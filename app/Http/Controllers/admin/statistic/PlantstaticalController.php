<?php

namespace App\Http\Controllers\admin\statistic;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountPlantExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlantstaticalController extends Controller
{
    public function index()
    {

        $plants = [
            ['STT' => 1, 'plant-vn' => 'Hương Viên Núi', 'plant-latin' => 'Turpinia montana', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Bồ Hòn', 'family' => 'Ngô Vàng, Côi'],
  ['STT' => 2, 'plant-vn' => 'Vót Oldham', 'plant-latin' => 'Viburnum oldhamii', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Tục Đoạn', 'family' => 'Kim Ngân'],
  ['STT' => 3, 'plant-vn' => '', 'plant-latin' => 'Staurastrum gracille var. elongatum', 'phylum' => 'Tảo lục', 'class' => 'Tảo lục', 'order' => 'Song tinh tảo', 'family' => 'Desmidisceae'],
  ['STT' => 4, 'plant-vn' => '', 'plant-latin' => 'Cymbella naviculiformis', 'phylum' => 'Tảo silic', 'class' => 'Bacillariophyceae', 'order' => 'Discinales', 'family' => 'Naviculaceae'],
  ['STT' => 5, 'plant-vn' => '', 'plant-latin' => 'Cymbella parva', 'phylum' => 'Tảo silic', 'class' => 'Bacillariophyceae', 'order' => 'Discinales', 'family' => 'Naviculaceae'],
  ['STT' => 6, 'plant-vn' => 'Euglena rostifera Shirota', 'plant-latin' => 'Tảo mắt', 'phylum' => 'Euglenophyceae', 'class' => 'Euglenales', 'order' => 'Euglenaceae', 'family' => null],
  ['STT' => 7, 'plant-vn' => 'Euglena spirogyra', 'plant-latin' => 'Tảo mắt', 'phylum' => 'Euglenophyceae', 'class' => 'Euglenales', 'order' => 'Euglenaceae', 'family' => null],
  ['STT' => 8, 'plant-vn' => '', 'plant-latin' => 'Staurastrum limneticum', 'phylum' => 'Tảo lục', 'class' => 'Tảo lục', 'order' => 'Song tinh tảo', 'family' => 'Desmidisceae'],
  ['STT' => 9, 'plant-vn' => 'Trèn Trung Bộ', 'plant-latin' => 'Tarenna annamensis', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Long Đởm', 'family' => 'Cà Phê'],
  ['STT' => 10, 'plant-vn' => 'Ráng Song Quần Nở', 'plant-latin' => 'Diplazium dilatatum', 'phylum' => 'Dương Xỉ', 'class' => 'Ráng Đa Túc', 'order' => 'Tổ Diều', 'family' => 'Ráng Gỗ Nhỏ'],
  ['STT' => 11, 'plant-vn' => 'Can Xỉ Colanie', 'plant-latin' => 'Asplenium colaniae', 'phylum' => 'Dương Xỉ', 'class' => 'Ráng Đa Túc', 'order' => 'Ráng Đa Túc', 'family' => 'Tổ Điểu'],
  ['STT' => 12, 'plant-vn' => 'Tổ Điểu Một Bên', 'plant-latin' => 'Asplenium unilaterale', 'phylum' => 'Dương Xỉ', 'class' => 'Ráng Đa Túc', 'order' => 'Ráng Đa Túc', 'family' => 'Tổ Điểu'],
  ['STT' => 13, 'plant-vn' => 'Dạ Hợp Bông', 'plant-latin' => 'Magnolia talaumoides', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Ngọc Lan', 'family' => 'Ngọc Lan'],
  ['STT' => 14, 'plant-vn' => '', 'plant-latin' => 'Phacus longicauda', 'phylum' => 'Tảo mắt', 'class' => 'Euglenophyceae', 'order' => 'Euglenales', 'family' => 'Euglenaceae'],
  ['STT' => 15, 'plant-vn' => '', 'plant-latin' => 'Phacus longicauda var attenuata', 'phylum' => 'Tảo mắt', 'class' => 'Euglenophyceae', 'order' => 'Euglenales', 'family' => 'Euglenaceae'],
  ['STT' => 16, 'plant-vn' => 'Vàng Trắng Trung Quốc', 'plant-latin' => 'Alseodaphne chinensis', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Long Não', 'family' => 'Long Não, Quế, Re']
        ];

        return view('admin.statical.plantstatical', compact( 'plants'));
        
    }
    public function exportexcel()
    {

        $plants = [
            ['STT' => 1, 'plant-vn' => 'Hương Viên Núi', 'plant-latin' => 'Turpinia montana', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Bồ Hòn', 'family' => 'Ngô Vàng, Côi'],
            ['STT' => 2, 'plant-vn' => 'Vót Oldham', 'plant-latin' => 'Viburnum oldhamii', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Tục Đoạn', 'family' => 'Kim Ngân'],
            ['STT' => 3, 'plant-vn' => '', 'plant-latin' => 'Staurastrum gracille var. elongatum', 'phylum' => 'Tảo lục', 'class' => 'Tảo lục', 'order' => 'Song tinh tảo', 'family' => 'Desmidisceae'],
            ['STT' => 4, 'plant-vn' => '', 'plant-latin' => 'Cymbella naviculiformis', 'phylum' => 'Tảo silic', 'class' => 'Bacillariophyceae', 'order' => 'Discinales', 'family' => 'Naviculaceae'],
            ['STT' => 5, 'plant-vn' => '', 'plant-latin' => 'Cymbella parva', 'phylum' => 'Tảo silic', 'class' => 'Bacillariophyceae', 'order' => 'Discinales', 'family' => 'Naviculaceae'],
            ['STT' => 6, 'plant-vn' => 'Euglena rostifera Shirota', 'plant-latin' => 'Tảo mắt', 'phylum' => 'Euglenophyceae', 'class' => 'Euglenales', 'order' => 'Euglenaceae', 'family' => null],
            ['STT' => 7, 'plant-vn' => 'Euglena spirogyra', 'plant-latin' => 'Tảo mắt', 'phylum' => 'Euglenophyceae', 'class' => 'Euglenales', 'order' => 'Euglenaceae', 'family' => null],
            ['STT' => 8, 'plant-vn' => '', 'plant-latin' => 'Staurastrum limneticum', 'phylum' => 'Tảo lục', 'class' => 'Tảo lục', 'order' => 'Song tinh tảo', 'family' => 'Desmidisceae'],
            ['STT' => 9, 'plant-vn' => 'Trèn Trung Bộ', 'plant-latin' => 'Tarenna annamensis', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Long Đởm', 'family' => 'Cà Phê'],
            ['STT' => 10, 'plant-vn' => 'Ráng Song Quần Nở', 'plant-latin' => 'Diplazium dilatatum', 'phylum' => 'Dương Xỉ', 'class' => 'Ráng Đa Túc', 'order' => 'Tổ Diều', 'family' => 'Ráng Gỗ Nhỏ'],
            ['STT' => 11, 'plant-vn' => 'Can Xỉ Colanie', 'plant-latin' => 'Asplenium colaniae', 'phylum' => 'Dương Xỉ', 'class' => 'Ráng Đa Túc', 'order' => 'Ráng Đa Túc', 'family' => 'Tổ Điểu'],
            ['STT' => 12, 'plant-vn' => 'Tổ Điểu Một Bên', 'plant-latin' => 'Asplenium unilaterale', 'phylum' => 'Dương Xỉ', 'class' => 'Ráng Đa Túc', 'order' => 'Ráng Đa Túc', 'family' => 'Tổ Điểu'],
            ['STT' => 13, 'plant-vn' => 'Dạ Hợp Bông', 'plant-latin' => 'Magnolia talaumoides', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Ngọc Lan', 'family' => 'Ngọc Lan'],
            ['STT' => 14, 'plant-vn' => '', 'plant-latin' => 'Phacus longicauda', 'phylum' => 'Tảo mắt', 'class' => 'Euglenophyceae', 'order' => 'Euglenales', 'family' => 'Euglenaceae'],
            ['STT' => 15, 'plant-vn' => '', 'plant-latin' => 'Phacus longicauda var attenuata', 'phylum' => 'Tảo mắt', 'class' => 'Euglenophyceae', 'order' => 'Euglenales', 'family' => 'Euglenaceae'],
            ['STT' => 16, 'plant-vn' => 'Vàng Trắng Trung Quốc', 'plant-latin' => 'Alseodaphne chinensis', 'phylum' => 'Ngọc Lan', 'class' => 'Ngọc Lan', 'order' => 'Long Não', 'family' => 'Long Não, Quế, Re']
        ];

        return Excel::download(new CountPlantExport( $plants), 'plantstatical.xlsx');
        
    }
}
