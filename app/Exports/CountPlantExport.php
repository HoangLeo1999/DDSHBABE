<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CountPlantExport implements FromCollection
{
    protected $plants;


    public function __construct(array $plants)
    {
        $this->plants = $plants;

    }

    public function collection()
    {
        return collect(array_merge($this->plants));
    }

    public function headings(): array
    {
        return [
            'STT',
            'Class',
            'Species Count',
        ];
    }
}
