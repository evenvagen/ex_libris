<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;

class StoreUser extends FormRequest
{

    public function rules()
    {
        return [
            'email' => 'bail|required|unique:users',
            'password' => 'required|confirmed',
        ];
    }


    public function messages(){
        return [
            'email.required' => 'E-post feltet må fylles ut',
            'email.unique' => 'Denne e-posten finnes allerede i systemet',
            'password.confirmed' => 'Passordene stemmer ikke overens'
        ];
    }
}
