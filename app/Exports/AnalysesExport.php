<?php

namespace App\Exports;

use App\Analysis;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnalysesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Analysis::all();
    }
}
