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
       
        
            Mail::to('a.t.169630176.u-25541662.f7cc6750-c6df-4527-a207-1b3c396f25ae@tasks.clickup.com')
            ->cc('info@lambent.co')
            ->send(new TransReciept( $request));

            // Mail::to('janly@lumikha.c')->send(new Contact( $request));



       return redirect('/confirmation')->with('status', 'Your Message has been received');
    }
}
