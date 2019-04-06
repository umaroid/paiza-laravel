<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    use ContactRequestTrait;
    
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
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'contact' => 'required',
        ];
    }
    
    /**
     * Set custom messages for validator errors.
     * 
     * @return array
     */
     public function attributes()
     {
         return [
             'name' => 'お名前',
             'email' => 'メールアドレス',
             'subject' => '件名',
             'content' => '内容',
             ];
     }
}
