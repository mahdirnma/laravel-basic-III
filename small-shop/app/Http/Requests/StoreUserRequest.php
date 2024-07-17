<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'username' => 'required|min:3|max:20',
            'password' => 'required|min:8',
            'repeat_password' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"Name is required",
            'username.required'=>"Username is required",
            'password.required'=>"Password is required",
            'repeat_password.required'=>"Repeat Password is required",
        ];
    }
}
