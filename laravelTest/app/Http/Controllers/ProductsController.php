<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function show(){
        return view('pages.shop')->with('products', Product::paginate(20));
    }
}
