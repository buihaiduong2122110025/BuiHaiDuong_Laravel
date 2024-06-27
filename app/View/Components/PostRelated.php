<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostRelated extends Component
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
        
        $post_list = Post::where([['post.status', '=', 1],['type','=','post']])
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();

    return view('components.post-related', compact("post_list"));
        // return view('components.post-related');
    }
}
