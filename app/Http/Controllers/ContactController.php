<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $general = Contact::where('type', 'general')->get();
        $projects = Contact::where('type', 'project')->get();

        return view('contact.index', compact('general', 'projects'));
    }

}
