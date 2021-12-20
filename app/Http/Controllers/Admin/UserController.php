<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Repositories\Admin\UserRepositories;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller implements UserRepositoriesInterface
{
    private $userRepositories;

    public  function __construct(UserRepositories $userRepositories)
    {
        $this->userRepositories = $userRepositories;
    }

    public function index($user_id)
    {
        $products = $this->userRepositories->index($user_id);
        return view('/admin.user')->with(['products' => $products]);
    }
}








