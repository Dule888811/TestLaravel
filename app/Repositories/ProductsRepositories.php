<?php


namespace App\Repositories;


use App\Http\Controllers\ProductsRepositoriesInterface;
use App\Product;
use Illuminate\Http\Request;

class ProductsRepositories implements ProductsRepositoriesInterface
{
    public function search(Request $request)
    {

        $products = Product::all();
        $productsArr[] = array();

        switch ($request->result) {
            case "title":
                foreach ($products as $product) {
                    if ($product['title'] == $request->search) {
                        $productsArr[] = array_push($product);
                    } else {
                        continue;
                    }
                }
                break;
            case "description":
                foreach ($products as $product) {
                    if ($product['description'] == $request->search) {
                        $productsArr[] = array_push($product);
                    } else {
                        continue;
                    }
                }
                break;
            case "price":
                foreach ($products as $product) {
                    if ($product['price'] == $request->search) {
                        $productsArr[] = array_push($product);
                    } else {
                        continue;
                    }
                }
                break;
            case "category":
                foreach ($products as $product) {
                    if ($product['category'] == $request->search) {
                        $productsArr[] = array_push($product);
                    } else {
                        continue;
                    }
                }
                break;
            case "location":
                foreach ($products as $product) {
                    if ($product['location'] == $request->search) {
                        $productsArr[] = array_push($product);
                    } else {
                        continue;
                    }
                }
                break;
        }

    }
}
