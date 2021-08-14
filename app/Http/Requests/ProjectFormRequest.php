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
        $currentYear = now()->year;
        return [
            'title' => 'required',
            'description' => 'required|max:250',
            'content' => 'required',
            'location' => 'required',
            'year' => 'required',
            'image_first' => 'required',
            'image_second' => 'required',
            'image_third' => 'required',
            'image_fourth' => 'required'
        ];
    }
}