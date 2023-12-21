<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;



class NotiController extends Controller
{
    public function noti()
    {
        $events = Event::all();
        return view('noti.index', compact('events'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'title'=>'required',
            'description'=>'required',
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient'=>$request->email,
                'fromEmail'=>'something@gmail.com',
                'fromName'=>'Reminder Vaule',
                'title'=>$request->title,
                'body'=>$request->description
            ];
        

        Mail::send('noti.email-template', $mail_data, function($message) use ($mail_data)
        {
            $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['title']);
        });

        return redirect()->back()->with('success', 'Email Sent!');
    }
        else{
            return redirect()->back()->withInput()->with('error', 'Check your internet connection');
        }
    }

    public function isOnline(){
        return true;
    }
}
