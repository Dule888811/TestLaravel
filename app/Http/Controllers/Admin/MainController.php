<?php


namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Repositories\Admin\MainRepositories;
use App\Subcategory;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    protected $mainRepositories;

    public function __construct(MainRepositories $mainRepositories)
    {
    }

    public function index()
    {
        $products = Product::all();
        $subcategories = Subcategory::all();
        $products = Product::all();
        $caregories = Category::all();

        $newAds = DB::table('products')->orderBy('created_at', 'desc')->take(15)->get();
        return view('admin.main.index')->with(['categories' => $caregories, 'products' => $products, 'subcategories' => $subcategories, 'newAds' => $newAds]);
    }


}


/*  foreach($categories as $category)
  {
      if($category->Subcategories()->count() > 0){
          $subcategories[] = array_push($subcategories,$category->Subcategories()->get());
      }
      if($category->Products()->count() > 0){
          $products[] = array_push($products,$category->Products()->get());
      }
      foreach($products as  $product)
      {
//@dd($users['0']['1']['phone']);
          $colProduct = collect($product);
          $users[] = array_push($users,User::all()->where('id','==',$product['0']['user_id']));
      }

  } */



