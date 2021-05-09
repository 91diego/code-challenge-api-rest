<?php

namespace App\Exports;

use App\Models\Url;
use App\Models\User;
use Goutte\Client;
use Maatwebsite\Excel\Concerns\FromCollection;

class ElementsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Url::orderBy('created_at', 'DESC')->limit(1)->get();
    }
}
