<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface ProductsRepositoriesInterface
{
    public function search(Request $request);
}
