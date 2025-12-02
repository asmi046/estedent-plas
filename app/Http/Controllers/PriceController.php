<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::orderBy('sort_order')->get()->groupBy('unit');
        // dd($prices);
        return view('prices.index', compact('prices'));
    }
}
