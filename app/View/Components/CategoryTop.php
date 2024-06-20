<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryTop extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // $list = Category::where('status', '!=', 0)
        // ->orderBy('created_at', 'desc')
        // ->limit(3)
        // ->get();
        return view('components.category-top');
    }
}
