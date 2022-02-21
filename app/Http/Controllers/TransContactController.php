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
       
        
            // Mail::to('info@lambent.co')->send(new TransReciept( $request));

            Mail::to('janly@lumikha.c')->send(new Contact( $request));



       return redirect('/confirmation')->with('status', 'Your Message has been received');
    }
}
