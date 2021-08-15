<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends ResponseController
{
    /*
    |-------------------------------------------------------------------------------
    | Store contact.
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/contact
    | Method:         POST
    | Description:    Adds a contact to the application
    */
    public function store(Request $request)
    {
        $input = $request->all();

        // Validation for general/project !!!!!
        $rules = [
            'type' => 'required|in:general,project',
            'first_name' => 'required|alpha|max:50',
            'last_name' => 'required|alpha|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:9',
            'location' => 'required',
            'scheme' => 'required',
            'message' => 'required|max:255'
        ];

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return $this->sendResponse("error", $validation->errors(), 400);
        }

        Contact::create($input);

        return $this->sendResponse("success", 'Successfully submitted.', 201);
    }
}
