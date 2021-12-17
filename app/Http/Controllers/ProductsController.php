<?php


namespace App\Http\Controllers;

use App\Product;


class ProductsController extends Controller
{
    public function index(Product $product)
    {

        return view('/product')->with(['product' => $product]);
    }
}
