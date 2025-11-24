<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        $contacts_result = [];

        foreach ($contacts as $item)
            $contacts_result[$item->name] = $item->value;

        return view('contacts', ['contacts' => $contacts_result]);
    }
}
