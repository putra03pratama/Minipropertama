<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'pp' => 'nullable|image|max:5120|mimes:jpeg,png,jpg,gif',
            'nama' => "required|string|max:50",
            'email' => ["required", "email", Rule::unique('users', 'email')->ignore($this->user()->id)],
            'phone' => ['nullable', 'gt:0', 'regex:/^08\d{10,15}$/', Rule::unique('users', 'phone')->ignore($this->user()->id)],
            'alamat' => "nullable|string|max:200"
        ];
    }
}