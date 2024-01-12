<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CountHabitatExport implements FromCollection
{
    protected $plants;
    protected $animals;

    public function __construct( array $habitats)
    {
        $this->habitats = $habitats;
    }

    public function collection()
    {
        return collect(array_merge($this->habitats));
    }

    public function headings(): array
    {
        return [
            'STT',
            'Habitat',
            'Species Count',
        ];
    }
}
