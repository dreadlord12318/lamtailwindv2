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
        
        // $request->validate([
        //     'g-recaptcha-response' => function ($attribute, $value, $fail) {
        //         $secret = config('services.recaptcha.secret_key');
        //         $response = $request->get('g-recaptcha-response');
        //         $remoteip = $request->getClientIp();
        //         $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
        //     }
        // ]);

        $request->validate([
            'g-recaptcha-response' => 'required|string',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $request->get('g-recaptcha-response'),
            'remoteip' => $request->getClientIp(),
        ]);

        if (! $response->json('success')) {
            throw ValidationException::withMessages(['g-recaptcha-response' => 'Error verifying reCAPTCHA, please try again.']);
        }
       
        
      
            // Mail::to('a.t.169630176.u-25541662.f7cc6750-c6df-4527-a207-1b3c396f25ae@tasks.clickup.com')
            // ->cc('info@lambent.co')
            // ->send(new Contact2( $request));

        Mail::to('janly@lumikha.co')->send(new Contact2( $request));


       return back()->with('status', 'Your Message has been received');
    }
}
