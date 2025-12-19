<?php

namespace App\View\Components\Services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StepsInput extends Component
{
    public string $title;
    public string $key;
    public array $sections;
    public array $information=[];

    /**
     * Create a new component instance.
     */
    public function __construct(string $title="", string $key="", array $sections=[])
    {
        $this->title = $title;
        $this->key = $key;
        $this->sections = $sections;

        $this->information = array_filter($sections, function($section) {
            return $section['part'] === $this->key;
        });
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services.steps-input');
    }
}
