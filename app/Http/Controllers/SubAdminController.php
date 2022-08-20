<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\SubAdmin;
use Illuminate\Notifications\Notification;

class SubAdminController extends Controller
{
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
        $page_title = 'Sub Admin';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'subadmin';

        $users = User::get();

        return view('dashboard.subadmin', compact('page_title', 'page_description','action','logo','logoText','users' ));
    }

    public function create()
    {
        $page_title = 'Create Subadmin';
        $page_description = 'Some description for the page';
        $logo = "assets/img/logo/new_logo.png";
        $logoText = "Pasha Enterprises";

        $action = 'subadmin';

        return view('dashboard.create_subadmin', compact('page_title', 'page_description','action','logo','logoText'));

    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user){

            $userData = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ];

            $user->notify(new SubAdmin($userData));

            return redirect()
                ->to(route('subadmin'))
                ->with('success', 'User has been added successfully!');
        }
    }
}
