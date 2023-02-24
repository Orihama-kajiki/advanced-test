<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'gender' => 'required|in:1,2',
            'email' => 'required|email|max:255',
            'postcode' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required|max:255',
            'building_name' => 'nullable|max:255',
            'opinion' => 'required|max:120',
        ];
    }
        public function messages()
    {
        return [
            'lastname.required' => '名字を入力してください',
            'firstname.required' => '名前を入力してください',            
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'email.max' => 'メールアドレスは255文字以内で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '郵便番号は-(ハイフン)を含めた8文字で入力してください',
            'address.required' => '住所を入力してください',
            'address.max' => '住所は255文字以内で入力してください',
            'opinion.required' => 'ご意見欄を入力してください',
            'opinion.max' => 'ご意見欄は120文字以内で入力してください',
        ];
    }
}
