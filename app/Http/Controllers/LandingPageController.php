<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::take(8)->get();
        return view('welcome', compact('products'));
    }
}
