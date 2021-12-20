<?php


namespace App\Repositories\Admin;


use App\Http\Controllers\Admin\UserRepositoriesInterface;
use Illuminate\Support\Facades\DB;

class UserRepositories implements UserRepositoriesInterface
{
    public function index($user_id)
    {

        $products = DB::table('products')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('users.id', '=', $user_id)
            ->select('products.*', 'users.phone', 'users.location')
            ->get();
        return $products;

    }
}
