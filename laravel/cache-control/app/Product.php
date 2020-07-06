<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];

    public function categories()
    {
        return $this->belongsToMany("\App\Category", 'product_categories');
    }
}
