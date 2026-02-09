<?php

namespace App\View\Components\Services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlideGalery extends Component
{
    public string $title;

    public string $key;

    public array $sections;

    public int $index;

    public string $text;

    public array $information = [];

    /**
     * Create a new component instance.
     */
    public function __construct(string $title = '', string $key = '', array $sections = [], int $index = 0, string $text = '')
    {
        $this->title = $title;
        $this->key = $key;
        $this->sections = $sections;
        $this->index = $index;
        $this->text = $text;
        $this->information = array_filter($sections, function ($section) {
            return $section['part'] === $this->key;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services.slide-galery');
    }
}
