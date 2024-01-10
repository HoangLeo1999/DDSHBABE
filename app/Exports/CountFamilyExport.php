<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CountFamilyExport implements FromCollection
{
    protected $plants;
    protected $animals;

    public function __construct(array $plants, array $animals)
    {
        $this->plants = $plants;
        $this->animals = $animals;
    }

    public function collection()
    {
        return collect(array_merge($this->plants, $this->animals));
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
