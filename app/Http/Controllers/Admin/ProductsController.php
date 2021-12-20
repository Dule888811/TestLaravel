<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use App\Repositories\Admin\ProductsRepositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    private $productsRepositoriesInterface;

    public function __construct(ProductsRepositoriesInterface $productsRepositoriesInterface)
    {
        $this->productsRepositoriesInterface = $productsRepositoriesInterface;
    }

    public function index(Product $product)
    {

        return view('/admin.product')->with(['product' => $product]);
    }

    public function search(Request $request)
    {
        $products = DB::table('products')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->select('products.title', 'products.description', 'products.price', 'products.new', 'users.phone', 'users.location', 'users.name')
            ->get();

        $srearcProducts = $this->productsRepositoriesInterface->search($request);

        return view('/admin.search')->with(['srearcProducts' => $srearcProducts]);
    }
}
