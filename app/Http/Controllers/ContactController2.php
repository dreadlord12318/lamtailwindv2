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
       
        
            Mail::to('dreadlord12318@gmail.com')->send(new Contact2( $request));

      

       return back()->with('status', 'Your Message has been received');
    }
}
