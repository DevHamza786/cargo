<?php

namespace App\Http\Controllers;

use App\Exports\TrackingExport;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Exports\TrackingTemplate;
use LynX39\LaraPdfMerger\PdfManage;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TrackingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page_title = 'Tracking';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";
        $data = Tracking::with('user')->get();

        $action = 'tracking_table';

        return view('dashboard.track', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'data'));
    }

    public function create()
    {
        $page_title = 'Create Tracking';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'tracking_table';

        return view('dashboard.create_tracking', compact('page_title', 'page_description', 'action', 'logo', 'logoText'));
    }

    public function store(Request $request)
    {

        $page_title = 'Tracking';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'tracking_table';

        $trackingData = Tracking::create($request->all());

        return redirect()
            ->to(route('admin.track'))
            ->with('success', 'The tracking has been added successfully!');
    }

    public function edit($id)
    {
        $page_title = 'Edit Tracking';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'tracking_table';

        $data = Tracking::find($id);


        return view('dashboard.edit_track', compact('page_title', 'page_description', 'action', 'logo', 'logoText', 'data'));
    }

    public function update(Request $request)
    {
        $page_title = 'Tracking';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'tracking_table';

        $updateTracking = Tracking::where('id', $request->id)->update($request->all());

        return redirect()
            ->to(route('track'))
            ->with('success', 'The tracking has been update successfully!');
    }

    public function updateStatus(Request $request)
    {
        $data = Tracking::whereIn('id', $request->trackingID)->update(['status' => $request->status]);
        if ($data) {
            return response()->json(['success' => 'Tracking Status Update Successfully.']);
        } else {
            return response()->json(['error' => 'Something went wrong.']);
        }
    }

    public function generatePDF(Request $request)
    {
        $files = [];

        $trackData = Tracking::whereIn('id', $request->trackingID)->get();

        foreach ($trackData as $data) {
            $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('https://pashaenterprises.org/tracking'));

            $pdf = app('dompdf.wrapper');

            $pdf->loadView('dashboard.tracking_slip_pdf', compact('data', 'qrcode'));

            Storage::put('public/documents/' . $data->track_id . '.PDF', $pdf->output());

            $files[] = $data->track_id . '.PDF';
        }

        // Create an instance of PDFMerger
        $pdf = new \Jurosh\PDFMerge\PDFMerger;
        foreach ($files as $key => $value) {
            $pdfFilePath = storage_path() . '/app/public/documents/'.$value;
            $pdf->addPDF($pdfFilePath, 'all');
        }
        $data = date("d/m/y");
        // Generate download of "mergedpdf.pdf"
        $pdf->merge('download', "pashaenterprises$data.pdf");

        return response()->json(['files' => $files]);
        // return $pdf->download('pashaenterprises.pdf');
    }

    // For Excel
    public function template()
    {
        return Excel::download(new TrackingTemplate, 'PE-Template.xlsx');
    }

    public function trackingExport(Request $req)
    {
        return Excel::download(new TrackingExport($req->trackingID), 'PE-Tracking.xlsx');

    }
}
