<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\Product;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class MainMenu extends Component
{
    /**
     * Create a new component instance.
     */
     public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $args_mainmenu = [
            ['status','=','1'],
            ['position','=','mainmenu'],
            ['parent_id','=','0']

        ];
        $list_menu = Menu::where($args_mainmenu)->orderBy('sort_order','desc')->get();


        // $user = User::where([
        //     ['status','!=','0'],
        //     ['roles','=','admin'],
           

        // ])
        // ->orderBy('created_at','desc')->get();
        $user = Auth::user();
        //log Ok thì truyền vô
        $search_list = Product::where('product.status', '=', 1)
        ->orderBy('product.created_at', 'desc')
        // ->limit(3)
        ->get();

        return view('components.main-menu',compact('list_menu','user','search_list'));
    }
}
