<?php


namespace App\Http\Controllers;

use App\Product;
use App\Repositories\ProductsRepositories;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    private $productsRepositoriesInterface;
    public function __construct(ProductsRepositoriesInterface $productsRepositoriesInterface)
    {
        $this->productsRepositories = $productsRepositoriesInterface;
    }
    public function index(Product $product)
    {

        return view('/product')->with(['product' => $product]);
    }
    public function search(Request $request)
    {
        
       // $productsArr = $this->productsRepositoriesInterface->search($request);
    }
}
