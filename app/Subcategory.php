<?php


namespace App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;


class Subcategory extends Model
{
    protected $fillable = [
        'name','category_id'
    ];
    public function Categories()
    {
        return $this->hasMany('App\Subcategory');
    }
}
