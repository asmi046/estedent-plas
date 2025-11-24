<?php

namespace App\View\Components;

use Closure;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class HeaderAll extends Component
{
    public $contacts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->contacts = Cache::rememberForever('all_contacts', function () {
            return Contact::all()->keyBy('name');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-all');
    }
}
