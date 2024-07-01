<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $keywords = $request->input('keywords_submit');

        $search_product = Product::where('name', 'like', '%' . $keywords . '%')->get();
        $search_category = Category::where('name', 'like', '%' . $keywords . '%')->get();
        $search_brand = Brand::where('name', 'like', '%' . $keywords . '%')->get();
        $search_post = Post::where('title', 'like', '%' . $keywords . '%')->get();

        return view('frontend/search', compact('search_product', 'search_category', 'search_brand', 'search_post', 'keywords'));
    }


    public function search_product(Request $request)
    {
        $keywords = $request->input('keywords_submit');

        $search_product = Product::where('name', 'like', '%' . $keywords . '%')->get();
       

        return view('frontend/search_product', compact('search_product', 'keywords'));
    }

    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $suggestions = Product::where('name', 'like', '%' . $query . '%')
            ->get(['name', 'image', 'slug']);



        $suggestions = $suggestions->map(function ($item) {
            $item->image_url = asset('img/products/' . $item->image);
            $item->detail_url = route('site.product.detail', ['slug' => $item->slug]);
            return $item;
        });

        return response()->json($suggestions);
    }

    //     public function autocomplete(Request $request)
    // {
    //     $query = $request->get('query');

    //     $product_suggestions = Product::where('name', 'like', '%' . $query . '%')
    //         ->get(['name', 'image', 'slug']);

    //     $category_suggestions = Category::where('name', 'like', '%' . $query . '%')
    //         ->get(['name']);

    //     $brand_suggestions = Brand::where('name', 'like', '%' . $query . '%')
    //         ->get(['name']);

    //     $post_suggestions = Post::where('title', 'like', '%' . $query . '%')
    //         ->get(['title']);

    //     $suggestions = collect();

    //     $suggestions = $suggestions->merge($product_suggestions->map(function ($item) {
    //         return [
    //             'type' => 'product',
    //             'name' => $item->name,
    //             'image_url' => asset('img/products/' . $item->image),
    //             'detail_url' => route('site.product.detail', ['slug' => $item->slug])
    //         ];
    //     }));

    //     $suggestions = $suggestions->merge($category_suggestions->map(function ($item) {
    //         return [
    //             'type' => 'category',
    //             'name' => $item->name,
    //             'detail_url' => route('site.category.detail', ['slug' => $item->slug])
    //         ];
    //     }));

    //     $suggestions = $suggestions->merge($brand_suggestions->map(function ($item) {
    //         return [
    //             'type' => 'brand',
    //             'name' => $item->name,
    //             'detail_url' => route('site.brand.detail', ['slug' => $item->slug])
    //         ];
    //     }));

    //     $suggestions = $suggestions->merge($post_suggestions->map(function ($item) {
    //         return [
    //             'type' => 'post',
    //             'name' => $item->title,
    //             'detail_url' => route('site.post.detail', ['slug' => $item->slug])
    //         ];
    //     }));

    //     return response()->json($suggestions);
    // }
}
