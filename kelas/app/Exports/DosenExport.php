<?php

namespace App\Exports;

use App\Dosen;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dosen::all();
    }
}
