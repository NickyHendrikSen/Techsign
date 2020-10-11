<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'id',
        'sub_categories_id',
        'name',
        'photo',
        'price',
        'delivery_price',
        'stock'
    ];
}
