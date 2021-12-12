<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
use App\User;
use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'image' => base64_decode(1000),
        'title' => Str::random(20),
        'description' => Str::random(100),
        'new' => random_int(0,1),
        'price' => rand(1055,100889)/10,
        'category_id' =>  factory('App\Category'),
        'user_id' =>  factory('App\User'),
    ];
});
