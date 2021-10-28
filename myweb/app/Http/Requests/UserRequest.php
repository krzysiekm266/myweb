<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    private $rulesEmail = [
        'new_email'=>['required','confirmed'],
    ];

    private $rulesPassword = [
        'new_password'=>['required','confirmed'],
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->routeIs('user.update.email'))
        {
            return $this->rulesEmail;
        }
        elseif($this->routeIs('user.update.password'))
        {
            return $this->rulesPassword;
        }
        else
        {
            //  return [ ...$this->rulesEmail, ...$this->rulesPassword ];
            return array_merge($this->rulesEmail,$this->rulesPassword);
        }

    }
}
