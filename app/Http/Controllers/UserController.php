<?php


namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($user_id)
    {

        $products =  DB::table('products')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('users.id','=',$user_id)
            ->select('products.*', 'users.phone', 'users.location')
            ->get();





        return view('/user')->with(['products' => $products]);
    }
}
