<?php

namespace App\Http\Controllers;

use App\Models\Price;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::orderBy('sort_order')->get()->groupBy('section');

        // dd($prices);
        return view('prices.index', compact('prices'));
    }
}
