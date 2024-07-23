<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormContentRequest extends FormRequest
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
            'fname' => 'required|string|min:3',
            'lname' => 'required|string|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'c_message' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'fname.required' => 'First Name is required!',
            'fname.string' => 'First Name must be a string!',
            'fname.min' => 'First Name must be at least 3 characters!',
            'lname.required' => 'Last Name is required!',
            'lname.string' => 'Last Name must be a string!',
            'lname.min' => 'Last Name must be at least 3 characters!',
            'email.required' => 'Email is required!',
            'email.email' => 'Invalid email format!',
            'subject.required' => 'Subject is required!',
            'c_message.required' => 'Message is required!',
        ];
    }
}
