<?php

namespace App\Http\Controllers;
use App\Http\Requests\TransContactRequest;

use Illuminate\Http\Request;
use App\Mail\TransReciept;
Use Mail;

class TransContactController extends Controller
{
    public function show()
    {
        return view('pricing');
    }

    public function mail(TransContactRequest $request)
    {
       
        
            Mail::to('dreadlord12318@gmail.com')->send(new TransReciept( $request));



       return redirect('/confirmation')->with('status', 'Your Message has been received');
    }
}
