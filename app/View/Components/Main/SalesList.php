<?php

namespace App\View\Components\Main;

use App\Models\Sales as SalesModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SalesList extends Component
{
    public $sales;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sales = SalesModel::orderBy('created_at', 'desc')->take(2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.sales-list');
    }
}
