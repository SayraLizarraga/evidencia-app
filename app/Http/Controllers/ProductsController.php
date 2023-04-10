<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products;

class ProductsController extends Controller
{
    //
    public function index_products(){
        $page_title= "Products";
        $products = products::all();
        return view('products', compact('page_title','products'));
        }
}
