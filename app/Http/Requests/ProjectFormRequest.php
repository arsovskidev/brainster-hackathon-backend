<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required|max:250',
            'content' => 'required',
            'location' => 'required',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'image_first' => 'required|image|max:2048',
        ];
    }
}