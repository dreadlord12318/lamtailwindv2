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
       
        
        // Mail::to('a.t.169630176.u-25541662.f7cc6750-c6df-4527-a207-1b3c396f25ae@tasks.clickup.com')
        // ->cc('info@lambent.co')->send(new Contact( $request));
        
        
        // Mail::to('janly@lumikha.co')->send(new Contact( $request));

      

       return back()->with('status', 'Your Message has been sent');
    }
}
