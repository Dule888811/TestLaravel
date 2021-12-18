<?php


namespace App;
use Illuminate\Database\Eloquent\Model;


class Subcategory extends Model
{
    protected $fillable = [
        'name','category_id'
    ];

    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}
