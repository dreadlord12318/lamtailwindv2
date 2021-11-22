<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;

use Illuminate\Http\Request;

use Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function show()
    {
            return view('contact');
    }

    public function mail(ContactRequest $request)
    {
       
        foreach (['janly@lumikha.co', 'dreadlord12318@gmail.com'] as $recipient) {
            Mail::to($recipient)->send(new Contact( $request));
        }

      

       return back()->with('status', 'Your Message has been received');
    }
}
