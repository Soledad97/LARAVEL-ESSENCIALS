<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Cart;

class WebsiteController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->limit(4)->get();
        $categories = Category::all();
        
        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('website.index',
                [
                    'products' => $products , 
                    'categories', $categories,
                    'cart' => $cart
                ]
            );
        }
        
        return view('website.index',
            [
                'products' => $products , 
                'categories', $categories,
                'cart' => session('cart')
            ]
        );

    }
}
