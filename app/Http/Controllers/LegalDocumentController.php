<?php

namespace App\Http\Controllers;

use App\Models\LegalDocument;

class LegalDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = LegalDocument::orderBy('order')->get();

        return view('legal-documents', compact('documents'));
    }
}
