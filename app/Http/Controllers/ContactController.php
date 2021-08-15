<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $general = Contact::where('type', 'general')
        ->orderBy('id', 'DESC')->get();

        $projects = Contact::where('type', 'project')
        ->orderBy('id', 'DESC')->get();

        return view('contact.index', compact('general', 'projects'));
    }

}
