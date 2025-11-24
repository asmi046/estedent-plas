<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index()
    {
        $specialists = Specialist::orderBy('sort_order')->get();
        return view('specialists.index', compact('specialists'));
    }

    public function show($slug)
    {
        $specialist = Specialist::where('slug', $slug)->firstOrFail();
        return view('specialists.page', compact('specialist'));
    }
}
