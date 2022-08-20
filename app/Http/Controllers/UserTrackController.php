<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Notifications\ContactUs;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Notification;

class UserTrackController extends Controller
{
    public function index()
    {
        $action = 'home';

        return view('index',compact('action'));
    }

    public function find(Request $request)
    {

        $action = 'tracking';

        $tracking = Tracking::where('track_id', $request->tracking_id)->first();

        if($tracking){
            return view('tracking', compact('tracking','action'));
        }
    }

    public function tracking(Request $request)
    {
        $action = 'tracking';

        return view('tracking',compact('action'));
    }

    public function about()
    {
        $action = 'about';

        return view('about-us',compact('action'));
    }

    public function contact()
    {
        $action = 'contact';

        return view('contact',compact('action'));
    }

    public function sendContact(Request $request){

        $user = User::first();

        $contactData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'message' => $request->message,
        ];

        Notification::send($user, new ContactUs($contactData));

        return back()->with(['success' => 'thanks for showing interest in us']);

    }
}
