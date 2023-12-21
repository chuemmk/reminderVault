<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function view()
    {
        return view('profile.view');
    }
    
    public function dashboard()
    {
        $data = ['loggedInUserInfo'=>Admin::where('id', '=', session('loggedInUser'))->first()];
        return view('profile.dashboard', $data);

    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password'=>'required|min:5',
            'new_password'=>'required|min:5',
            'confirm_password'=>'required|same:new_password'
        ]);

        $user = auth()->user();

        // dd(auth()->user());
        if($user){
            $user = User::find($user->id);
            $user->update([
                'password' => bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success', 'Password changed successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Old password is not matched.');
        }
    }

    public function show()
    {
        return view('profile.dashboard');
    
    }
}
