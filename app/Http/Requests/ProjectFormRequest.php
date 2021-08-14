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
            'content' => 'required|min:250',
            'location' => 'required',
            'year' => 'required|integer|digits_between:1900,'. $currentYear,
            'image_first' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_second' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_third' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_fourth' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

    }
}
