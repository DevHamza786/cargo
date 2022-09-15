<?php

namespace App\Exports;

use App\Models\Tracking;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TrackingExport implements FromView
{
    protected $trackingID;

    public function __construct($trackingID)
    {
        $this->trackingID = $trackingID;
    }

    public function view(): View
    {
        return view('export.tracking',[
            'tracking' => Tracking::whereIn('id', $this->trackingID)->get()
        ]);
    }
}
