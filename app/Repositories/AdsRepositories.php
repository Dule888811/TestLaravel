<?php


namespace App\Repositories;

use App\Http\Controllers\AdsRepositoriesInterface;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsRepositories implements AdsRepositoriesInterface
{
    public function store(Request $request)
    {

        $product = new Product();
        $product->description = $request->description;
        $product->title = $request->title;
        $image = $request->image;

        $name= $image->getClientOriginalName();
        $image->move(public_path('storage/app/public/images'), $name);
      //  $image->move( public_path() . '/images/' . $name);
       // $url = (public_path() . '/images/' . $name);

          $product->image = $name;
        $product->price = $request->price;
        $product->new = $request->result;
        $product->category_id = $request->category;
        $product->user_id = Auth::id();
        $product->save();
    }

}

