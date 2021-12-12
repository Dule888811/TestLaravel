<?php


namespace App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = [
        'name',
    ];
    public function Subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }
    public function Products()
    {
        return $this->hasMany('App\Product');
    }
}
