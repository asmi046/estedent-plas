<?php

namespace App\View\Components\Main;

use App\Models\Certificate;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Cert extends Component
{
    public $certificates;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->certificates = Cache::rememberForever('main_certificates', function () {
            $all_certificates = Certificate::orderBy('sort_order')->get();

            return $all_certificates;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.cert');
    }
}
