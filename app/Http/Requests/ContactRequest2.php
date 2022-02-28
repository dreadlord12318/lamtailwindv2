<?php

namespace App\Http\Requests;
use App\Rules\GoogleRecaptcha;

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
            'phone' => 'numeric',
            'last_name' => 'required',
            'email' => 'required | email',
            'message' => 'max:255',
            'g-recaptcha-response' => ['required', new GoogleRecaptcha],
         'g-recaptcha-response.required' => 'The recaptcha field is required.',
            // 'terms' => 'accepted',
        ];
    }
}
