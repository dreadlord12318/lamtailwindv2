<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest2 extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'first_name' => 'required',
            'phone' => 'max:21',
            'last_name' => 'required',
            'email' => 'required | email',
            'message' => 'max:255',
            'g-recaptcha-response' => 'required|string',
            
            // 'terms' => 'accepted',
        ];
    }
}
