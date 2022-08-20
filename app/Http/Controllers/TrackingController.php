<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;

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

        return view('dashboard.track', compact('page_title', 'page_description','action','logo','logoText' , 'data'));
    }

    public function create()
    {
        $page_title = 'Create Tracking';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'tracking_table';

        return view('dashboard.create_tracking', compact('page_title', 'page_description','action','logo','logoText'));

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
        ->to(route('track'))
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


        return view('dashboard.edit_track', compact('page_title', 'page_description','action','logo','logoText','data'));

    }

    public function update(Request $request)
    {
        $page_title = 'Tracking';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'tracking_table';

        $updateTracking = Tracking::where('id',$request->id)->update($request->all());

        return redirect()
        ->to(route('track'))
        ->with('success', 'The tracking has been update successfully!');
    }


}
