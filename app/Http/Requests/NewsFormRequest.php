<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsFormRequest extends FormRequest
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
            'content' => 'required|min:250',
            'image_first' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_second' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_third' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_fourth' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
