<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\ControlOrganization;

class ContactsController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        $contacts_result = [];

        foreach ($contacts as $item)
            $contacts_result[$item->name] = $item->value;

        $organizations = ControlOrganization::orderBy('sort_order')->get();
        return view('contacts', ['contacts' => $contacts_result, 'organizations' => $organizations]);
    }
}
