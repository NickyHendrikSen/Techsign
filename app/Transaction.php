<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id',
        'items_id',
        'date',
        'quantity',
        'status'
    ];
}
