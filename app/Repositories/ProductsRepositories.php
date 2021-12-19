<?php


namespace App\Repositories;


use App\Category;
use App\Http\Controllers\ProductsRepositoriesInterface;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductsRepositories implements ProductsRepositoriesInterface
{
    public function search(Request $request)
    {

        $products =  DB::table('products')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->select('products.title','products.category_id','products.description','products.price', 'products.new','users.phone', 'users.location','users.name')
            ->get();
        $SearchCollection = collect([]);
        $result = $request->result;
        $search = $request->search;
        switch ($result) {
            case "price":
                foreach ($products as $product) {
                    if ($product->price == $search) {
                        $SearchCollection->push($product);
                        continue;
                    }
                }
                break;
            case "description":
                foreach ($products as $product) {
                    if ($product->description == $search) {
                        $SearchCollection->push($product);
                    } else {
                        continue;
                    }
                }
                break;
            case "location":
                foreach ($products as $product) {
                    if ($product->location == $search) {
                        $SearchCollection->push($product);
                    } else {
                        continue;
                    }
                }
                break;
            case "category":
                foreach ($products as $product) {
                    if (Category::find($product->category_id)['name'] == $search) {
                        $SearchCollection->push($product);
                    } else {
                        continue;
                    }
                }
                break;
            case "title":
                foreach ($products as $product) {
                    if ($product->title == $search) {
                        $SearchCollection->push($product);
                    } else {
                        continue;
                    }
                }
                break;
        }
       return $SearchCollection;
    }
}
