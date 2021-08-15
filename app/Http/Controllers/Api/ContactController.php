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
            'message' => 'required|max:255'
        ];

        if($request->type == 'project'){
            $rules += [
                'location' => 'required',
                'scheme' => 'required',
            ];
        }

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return $this->sendResponse("error", $validation->errors(), 400);
        }

        if($request->scheme != ''){
            $ext = strtolower($request->scheme->getClientOriginalExtension());
            $scheme = '/schemes/' . time() . '.' . $ext;
            $request->scheme->move(public_path('schemes'), $scheme);
        }

        Contact::create($input);

        return $this->sendResponse("success", 'Successfully submitted.', 201);
    }
}
