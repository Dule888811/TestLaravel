<?php


namespace App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'location', 'title', 'description','new','price','user_id','category_id'
    ];

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
