<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
interface UserRepositoriesInterface
{
    public function index($user_id);
}
