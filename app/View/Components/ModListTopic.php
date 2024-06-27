<?php

namespace App\View\Components;

use App\Models\Topic;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModListTopic extends Component
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
        $list_topic = Topic::where([['status', '=', 1]])
        ->orderBy('sort_order', 'ASC')
        ->get();



        return view('components.mod-list-topic',compact('list_topic'));
    }
}
