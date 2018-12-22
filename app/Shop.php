<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model {

    protected $connection = 'mysql';

    protected $fillable = ['title', 'price', 'short_code', 'item_id', 'images', 'item_type'];

    public function cat_shop()
    {
        return $this->hasMany(CatShop::class, 'id');
    }

}