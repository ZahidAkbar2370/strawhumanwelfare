<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
     public function sendemail(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ];
        Mail::to('mhrabid558@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your message sent successfully!');
    }

    public function viewmails()
    {
        return view('emails.contactmail');
    }
}
