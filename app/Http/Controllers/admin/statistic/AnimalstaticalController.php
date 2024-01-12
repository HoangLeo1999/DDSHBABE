<?php

namespace App\Http\Controllers\admin\statistic;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CountAnimalExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalstaticalController extends Controller
{
    public function index()
    {
        $animals = [
            ['STT' => 1, 'animal-vn' => 'Thạch sùng baorin','animal-latin' => 'Hermidactylus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Tắc kè'],
            ['STT' => 2, 'animal-vn' => 'Nhông xanh','animal-latin' => 'Calotes versicolor','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 3, 'animal-vn' => 'Nhông Phructôphe ','animal-latin' => 'Calotes fruhstorferi','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 4, 'animal-vn' => 'Thằn Lằn Bay Đốm','animal-latin' => 'Draco maculatus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 5, 'animal-vn' => 'Rồng Đất','animal-latin' => 'Physignathus cocincinus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 6, 'animal-vn' => 'Thằn Lằn Bóng Đuôi Dài','animal-latin' => 'Mabuya longicaudata','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn Lằn Bóng'],
            ['STT' => 7, 'animal-vn' => 'Rắn Sọc Xanh','animal-latin' => 'Elaphe prasina','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn Nước'],
            ['STT' => 8, 'animal-vn' => ' ','animal-latin' => 'Hoplasoma sp1','phylum' => 'Chân Khớp','class' => 'Côn Trùng','order' => 'Cánh cứng','family' => 'Cánh Cứng Ăn Lá'],
            ['STT' => 9, 'animal-vn' => 'Thằn Lằn Bóng Đốm','animal-latin' => 'Mabuya multifasciata','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn lằn bóng'],
            ['STT' => 10, 'animal-vn' => 'Thằn Lằn Phênô','animal-latin' => 'Sphenomorphus sp','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn lằn bóng'],
            ['STT' => 11, 'animal-vn' => 'Liu Điu Chỉ','animal-latin' => 'Takydromus sexlineatus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn lắn thực'],
            ['STT' => 12, 'animal-vn' => 'Trăn Đất','animal-latin' => 'Python molurus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Trăn'],
            ['STT' => 13, 'animal-vn' => 'Rắn Roi Thường','animal-latin' => 'Ahaetulla prasina','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn nước'],
            ['STT' => 14, 'animal-vn' => 'Rắn Leo Cây','animal-latin' => 'Dendrelaphis pictus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn nước'],
            ['STT' => 15, 'animal-vn' => 'Rắn Sọc Đuôi Khoanh','animal-latin' => 'Elaphe moellendorffii','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn Nước'],
            ['STT' => 16, 'animal-vn' => 'Lách Tách Má Xám','animal-latin' => 'Alcippe morrisonia','phylum' => 'Có xương sống','class' => 'Chim','order' => 'Sẻ','family' => 'Chim chích'],
        ];

       

        return view('admin.statical.animalstatical', compact('animals'));
        
    }
    public function exportexcel()
    {
        $animals = [
            ['STT' => 1, 'animal-vn' => 'Thạch sùng baorin','animal-latin' => 'Hermidactylus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Tắc kè'],
            ['STT' => 2, 'animal-vn' => 'Nhông xanh','animal-latin' => 'Calotes versicolor','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 3, 'animal-vn' => 'Nhông Phructôphe ','animal-latin' => 'Calotes fruhstorferi','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 4, 'animal-vn' => 'Thằn Lằn Bay Đốm','animal-latin' => 'Draco maculatus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 5, 'animal-vn' => 'Rồng Đất','animal-latin' => 'Physignathus cocincinus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Nhông'],
            ['STT' => 6, 'animal-vn' => 'Thằn Lằn Bóng Đuôi Dài','animal-latin' => 'Mabuya longicaudata','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn Lằn Bóng'],
            ['STT' => 7, 'animal-vn' => 'Rắn Sọc Xanh','animal-latin' => 'Elaphe prasina','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn Nước'],
            ['STT' => 8, 'animal-vn' => ' ','animal-latin' => 'Hoplasoma sp1','phylum' => 'Chân Khớp','class' => 'Côn Trùng','order' => 'Cánh cứng','family' => 'Cánh Cứng Ăn Lá'],
            ['STT' => 9, 'animal-vn' => 'Thằn Lằn Bóng Đốm','animal-latin' => 'Mabuya multifasciata','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn lằn bóng'],
            ['STT' => 10, 'animal-vn' => 'Thằn Lằn Phênô','animal-latin' => 'Sphenomorphus sp','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn lằn bóng'],
            ['STT' => 11, 'animal-vn' => 'Liu Điu Chỉ','animal-latin' => 'Takydromus sexlineatus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Thằn lắn thực'],
            ['STT' => 12, 'animal-vn' => 'Trăn Đất','animal-latin' => 'Python molurus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Trăn'],
            ['STT' => 13, 'animal-vn' => 'Rắn Roi Thường','animal-latin' => 'Ahaetulla prasina','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn nước'],
            ['STT' => 14, 'animal-vn' => 'Rắn Leo Cây','animal-latin' => 'Dendrelaphis pictus','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn nước'],
            ['STT' => 15, 'animal-vn' => 'Rắn Sọc Đuôi Khoanh','animal-latin' => 'Elaphe moellendorffii','phylum' => 'Có xương sống','class' => 'Bò sát','order' => 'Bó vảy','family' => 'Rắn Nước'],
            ['STT' => 16, 'animal-vn' => 'Lách Tách Má Xám','animal-latin' => 'Alcippe morrisonia','phylum' => 'Có xương sống','class' => 'Chim','order' => 'Sẻ','family' => 'Chim chích'],
        ];

        
        return Excel::download(new CountAnimalExport($animals), 'animalstatical.xlsx');
        
    }
}
