<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CountAnimalExport implements FromCollection
{
   
    protected $animals;

    public function __construct( array $animals)
    {
        $this->animals = $animals;
    }

    public function collection()
    {
        return collect(array_merge( $this->animals));
    }

    public function headings(): array
    {
        return [
            'STT',
            'Family',
            'Species Count',
        ];
    }
}
