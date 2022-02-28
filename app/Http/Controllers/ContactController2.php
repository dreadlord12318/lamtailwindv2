<?php
namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest2;

use Illuminate\Http\Request;
use App\Mail\Contact2;
Use Mail;

class ContactController2 extends Controller
{
    public function show()
    {
            return view('contact');
    }

    public function mail(ContactRequest2 $request)
    {
        
       
        
            Mail::to('a.t.169630176.u-25541662.f7cc6750-c6df-4527-a207-1b3c396f25ae@tasks.clickup.com')
            ->cc('info@lambent.co')
            ->send(new Contact2( $request));

        // Mail::to('janly@lumikha.c')->send(new Contact2( $request));


       return back()->with('status', 'Your Message has been received');
    }
}
