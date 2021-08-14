<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required|in:general,project',
            'first_name' => 'required|alpha|50',
            'last_name' => 'required|alpha|min:50',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:9',
            'location' => 'required',
            'scheme' => 'required',
            'message' => 'required|max:255'
        ];
    }
}
