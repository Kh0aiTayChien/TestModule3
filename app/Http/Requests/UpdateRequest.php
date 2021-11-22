<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
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
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'manager_name' => 'required',
        ];
    }
    public function messages()
    {
        return [

            'name.required' => 'Tên đại lý không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email sai định dạng',
            'address.required' => 'Địa chỉ đại lý không được để trống',
            'manager_name.required' => 'Tên người quản lý không được để trống',
        ];
    }
}
