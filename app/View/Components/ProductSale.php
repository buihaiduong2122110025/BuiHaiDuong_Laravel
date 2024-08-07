<?php

namespace App\View\Components;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductSale extends Component
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
        $product_list = Product::where([['status', '=', 1], ['pricesale', '<', '100']])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('components.product-sale', compact("product_list"));
        // return view('components.product-sale');
    }
}
