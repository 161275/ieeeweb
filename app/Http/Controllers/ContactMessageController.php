<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        //  dd($request->all());
        $this->validate($request, [
            'Name' => 'required',
            'Email' => 'required|email',
            'Message' => 'required'
            ]);
            Mail::send('emails.contact-message', [ 
                'msg' => $request->Message
            ], function ($mail) use($request){
                $mail->from($request->Email, $request->Name);
                $mail->to('nishchalgarg123@gmail.com')->subject('contact message');
            }
        );
        return redirect()->back()->with('flash_message', 'Thank you for your message!');
    }
}

