<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeer extends FormRequest
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
            'fname' => ['required', 'max:255'],
            'sname' => ['required', 'max:255'],
            'pname' => ['required', 'max:255'],
        ];
    }

    public function attributes()
    {
        return [
            'fname' => 'First name',
            'sname' => 'Last name',
            'pname' => 'Patronymic',
        ];
    }
}
