<?php

namespace App\Http\Controllers;

use App\Models\Sales;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::orderBy('created_at', 'desc')->get();

        return view('sales.index', ['sales' => $sales]);
    }

    public function page($slug)
    {
        $sale = Sales::where('slug', $slug)->firstOrFail();
        $template = ($sale->template) ? $sale->template : 'sales.page';

        return view($template, ['sale' => $sale]);
    }
}
