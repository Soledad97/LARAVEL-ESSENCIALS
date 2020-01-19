<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class websiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = [
            [
                "name" => "P1",
            ],
            [
                "name" => "P2",
            ],
        ];
        return view('website.index', ['products' => $products]);
    }
    // ACA METODO PARA Faqs

}
