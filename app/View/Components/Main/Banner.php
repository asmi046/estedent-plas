<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Banner as ModelsBanner;

class Banner extends Component
{
    public $banners;
    public $options;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->banners = Cache::rememberForever('main_banners', function () {
            return ModelsBanner::where('name', 'Главный баннер')->orderBy('sort_order')->get();
        });

        $this->options = Cache::rememberForever('main_options', function () {
            return Parametr::where('section', 'Главный баннер')->get()->keyBy('str_id');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.banner');
    }
}
