<?php


namespace App\Repositories\Admin;


use App\Category;

class MainRepositories
{
    public function getProject()
    {

        $categories = Category::all();
        foreach ($categories as $categpry) {
            foreach ($categpry->Products()->get() as $product) {
                return $product->with('Category');
            }
        }
    }
}
