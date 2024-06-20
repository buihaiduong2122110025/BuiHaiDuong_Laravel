<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryCard extends Component
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

        $args = [
            ['status','=','1'],
        
            ['parent_id','=','0']

        ];
        $list = Category::where($args)
        ->orderBy('created_at', 'DESC')
        ->select("id", "name", "image", "slug", "status")
        ->limit(5)
        ->get();
   
    // return view('components/category-card', compact("list"));
        return view('components.category-card', compact("list"));
    }
}
