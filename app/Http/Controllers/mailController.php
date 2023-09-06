<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function  sendMessage(Request $request)  {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        print_r($message);
        $data = [
            'name'=> $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ];
        Mail::to('manavvrathodd@gmail.com')->send(new ContactMail($data));
        return redirect('/')->with('message','Message Sent Successfully');
        
    }
}
