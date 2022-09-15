<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class TrackingTemplate implements FromView
{

    public function view(): View
    {
        return view('export.template');
    }
}
