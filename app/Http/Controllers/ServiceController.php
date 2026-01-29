<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();

        return view('services.index', ['services' => $services]);
    }

    public function page($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $template = ($service->template) ? $service->template : 'services.page';
        // dd($service, $template);

        return view($template, ['service' => $service]);
    }
}
