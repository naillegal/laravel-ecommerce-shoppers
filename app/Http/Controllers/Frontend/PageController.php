<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function products()
    {
        return view('frontend.pages.products');
    }
    public function product_detail()
    {
        return view('frontend.pages.product_detail');
    }
    public function basket()
    {
        return view('frontend.pages.basket');
    }
}
