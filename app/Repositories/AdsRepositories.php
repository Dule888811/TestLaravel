<?php


namespace App\Repositories;




use App\Http\Controllers\RepositoriesInterface;
use App\Product;
use Illuminate\Http\Request;

class AdsRepositories implements RepositoriesInterface
{
    public function store(Request $request)
    {

           $product = new Product();
           $product->description = $request->description;
           $product->title = $request->title;
        $image = file_get_contents($_FILES['image']['tmp_name']);
        $image = base64_decode($image);
           $product->image = $image;
           $product->price = $request->price;
           $product->new = $request->result;
           $product->category_id = $request->category;
        $product->save();
    }
}

