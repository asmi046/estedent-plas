<?php

namespace App\View\Components\Main;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Advantage as ModelsAdvantage;

class Advantages extends Component
{
    public $advantages;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->advantages = Cache::rememberForever('main_advantages', function () {
            return ModelsAdvantage::orderBy('sort_order')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.advantages');
    }
}
