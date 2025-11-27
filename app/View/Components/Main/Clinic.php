<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Banner as ModelsBanner;

class Clinic extends Component
{
    public $galery;
    public $contacts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->galery = Cache::rememberForever('clinic_banners', function () {
            return ModelsBanner::where('name', 'Галерея клиники')->orderBy('sort_order')->get();
        });

        $this->contacts = Cache::rememberForever('all_contacts', function () {
            return Contact::all()->keyBy('name');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.clinic');
    }
}
