<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CountConservationvalueExport implements FromCollection
{
    protected $conservationvls;
   

    public function __construct(array $conservationvls)
    {
        $this->conservationvls = $conservationvls;
    }

    public function collection()
    {
        return collect(array_merge( $this->conservationvls));
    }

    public function headings(): array
    {
        return [
            'STT',
            'Conservatin value',
            'Species Count',
        ];
    }
}
