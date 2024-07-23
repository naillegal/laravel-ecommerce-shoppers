<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $about = About::where('id', 1)->first();
        return view('frontend.pages.about', ["about" => $about]);
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function products(Request $request, $slug = null)
    {
        $category = request()->segment(1) ?? null;
        $size = $request->size ?? null;
        $color = $request->color ?? null;
        $start_price = $request->start_price ?? null;
        $end_price = $request->end_price ?? null;
        $order = $request->order ?? 'id';
        $sort = $request->sort ?? 'asc';
        $products = Product::where('status', '1')->select(['id', 'name', 'slug', 'image', 'size', 'color', 'price', 'category_id'])
            ->where(function ($query) use ($size, $color, $start_price, $end_price) {
                if (!empty($size)) {
                    $query->where('size', $size);
                }
                if (!empty($color)) {
                    $query->where('color', $color);
                }
                if (!empty($start_price) && $end_price) {
                    $query->whereBetween('price', [$start_price, $end_price]);
                }
                return $query;
            })->with('category:id,name,slug')
            ->whereHas('category', function ($query) use ($category, $slug) {
                if (!empty($slug)) {
                    $query->where('slug', $slug);
                }
                return $query;
            });

        $minprice = $products->min('price');

        $maxprice = $products->max('price');

        $sizelists = Product::where('status', '1')->groupBy('size')->pluck('size')->toArray();

        $colorlists = Product::where('status', '1')->groupBy('color')->pluck('color')->toArray();

        $products = $products->orderBy($order, $sort)->paginate(12);



        return view('frontend.pages.products', compact('products', 'minprice', 'maxprice', 'sizelists', 'colorlists'));
    }
    public function product_detail($slug)
    {
        $product = Product::where('slug', $slug)->where('status', '1')->firstOrFail();
        $products = Product::where('id', '!=', $product->id)->where('category_id', $product->category_id)->where('status', '1')->limit(6)->get();


        return view('frontend.pages.product_detail', compact('product','products'));
    }
    public function women()
    {
        return view('frontend.pages.products');

    }
    public function children()
    {
        return view('frontend.pages.products');

    }
    public function men()
    {
        return view('frontend.pages.products');

    }
    public function discount_products()
    {
        return view('frontend.pages.products');

    }
}
