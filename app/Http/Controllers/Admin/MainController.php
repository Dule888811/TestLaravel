<?php


namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Subcategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {

        $subcategories = Subcategory::all();
        $products = Product::all();
        $categories = Category::all();

            $newAds =DB::table('products')->orderBy('created_at','desc')->take(15)->get();
        return view('admin.main.index')->with(['categories' => $categories,'products' => $products,'subcategories' => $subcategories,'newAds' => $newAds]);
    }
}
