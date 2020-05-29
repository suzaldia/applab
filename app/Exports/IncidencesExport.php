<?php

namespace App\Exports;

use App\Incidence;
use Maatwebsite\Excel\Concerns\FromCollection;

class IncidencesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Incidence::all();
    }
}
