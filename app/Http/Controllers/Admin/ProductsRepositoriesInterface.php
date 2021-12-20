<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

 interface ProductsRepositoriesInterface
{
    public function search(Request $request);
}
