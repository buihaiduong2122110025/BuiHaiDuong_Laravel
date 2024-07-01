<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $product_list = Product::where('product.status', '=', 1)
            ->orderBy('product.created_at', 'desc')
            ->paginate(6);

        return view('frontend.product', compact("product_list"));
    }

    public function getlistcategoryid($rowid)
    {
        $listcatid = [];
       
            array_push($listcatid, $rowid);
            $list1 = Category::where([['parent_id', '=', $rowid], ['status', '=', 1]])->select("id")->get();
            if (count($list1) > 0) {
                foreach ($list1 as $row1) {
                    array_push($listcatid, $row1->id);
                    $list2 = Category::where([['parent_id', '=', $row1->id], ['status', '=', 1]])->select("id")->get();
                    if (count($list2) > 0) {
                        foreach ($list2 as $row2) {
                            array_push($listcatid, $row2->id);
                        }
                    }
                }
            }
        return $listcatid;
    }


    public function category($slug)
    {

        $row =  Category::where([['slug', '=', $slug], ['status', '=', 1]])->select("id", "name", 'slug')->first();
        $listcatid = [];

        if ($row != null) {
            $listcatid  = $this->getlistcategoryid($row->id);
        }
        $product_list = Product::where('product.status', '=', 1)
            ->whereIn('category_id', $listcatid)
            ->orderBy('product.created_at', 'desc')
            ->paginate(3);

        return view('frontend.product_category', compact("product_list", "row"));
    }


    public function brand($slug)
    {

        $row =  Brand::where([['slug', '=', $slug], ['status', '=', 1]])->select("id", "name", 'slug')->first();
        // $listcatid = [];

        // if ($row != null) {
        //     $listcatid  = $this->getlistcategoryid($row->id);
        // }
        $product_list = Product::where('product.status', '=', 1)
            ->whereIn('brand_id',$row)
            ->orderBy('product.created_at', 'desc')
            ->paginate(3);

        return view('frontend.product_brand', compact("product_list", "row"));
    }
  
    public function product_detail($slug)
    {
        $product = Product::where([['status', '=', 1], ['slug', '=', $slug]])->first();
        $listcatid  = $this->getlistcategoryid($product->category_id);
        $product_list = Product::where([['status', '=', 1],['id','!=',$product->id]])
        ->whereIn('category_id', $listcatid)
        ->orderBy('product.created_at', 'desc')
        ->limit(3)
        ->get();
        return view('frontend.product_detail', compact('product','product_list'));
    }

   
    
}
