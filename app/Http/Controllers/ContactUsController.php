<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
     public function create()
    {
        return view('contact-us.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        // Send the email here
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'user_message' => $request->message,
        ];
        
        Mail::send('Email_Template', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('bepevav477@nazyno.com');
            $message->subject('Contact Form Submission');
        });
    
        return redirect()->back()->with('success', 'Thanks for contacting us! We will get back to you soon.');
    } 
}
