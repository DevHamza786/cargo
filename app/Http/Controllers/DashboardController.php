<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
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
    public function dashboard()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = __FUNCTION__;

        $data = Tracking::get();

        $tracking = Tracking::latest()->take(5)->get();

        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText' , 'data' , 'tracking'));
    }


    public function profile()
    {

        $page_title = 'Account Setting';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = __FUNCTION__;

        return view('dashboard.profile', compact('page_title', 'page_description','action','logo','logoText'));
    }

    public function changePassword(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }
}
