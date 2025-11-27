<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Cta extends Component
{
    public $cta;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cta = Cache::rememberForever('main_cta', function () {
            return Parametr::where('section', 'CTA блок на главной')->get()->keyBy('str_id');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.cta');
    }
}
