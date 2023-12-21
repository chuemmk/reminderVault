<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
 
    function login()
    {
        return view('user.login');
    }

    function register()
    {
        return view('user.register');
    }

    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12|confirmed',
            'password_confirmation'=>'required'
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->password_confirmation = Hash::make($request->password_confirmation);
        $save = $admin->save();

        // return redirect('user/login');

        return back()->with('success', 'You have been registered successfully. Please Login!');
               
    }
    
    function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        $userInfo = Admin::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else {
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('loggedInUser', $userInfo->id);
                return redirect('profile/view');
            }else
            {
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout()
    {
        if(session()->has('loggedInUser')){
            session()->pull('loggedInUser');
            return redirect('/user/login');
        }

    }

}
