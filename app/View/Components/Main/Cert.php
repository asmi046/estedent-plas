<?php

namespace App\View\Components\Main;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Specialist as ModelsSpecialist;

class Cert extends Component
{
    public $certificates;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->certificates = Cache::rememberForever('main_certificates', function () {
            $all_specialists = ModelsSpecialist::orderBy('sort_order')->get();
            $certs = [];

            foreach ($all_specialists as $specialist) {
                $certs = array_merge($certs, $specialist->certificates);
            }

            return $certs;
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
