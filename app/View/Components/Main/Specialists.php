<?php

namespace App\View\Components\Main;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Specialist as ModelsSpecialist;

class Specialists extends Component
{
    public $specialists;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->specialists = Cache::rememberForever('main_specialists', function () {
            return ModelsSpecialist::orderBy('sort_order')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.specialists');
    }
}
