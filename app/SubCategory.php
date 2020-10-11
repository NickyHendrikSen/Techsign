<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'sub_categories_id',
        'name',
    ];
}
