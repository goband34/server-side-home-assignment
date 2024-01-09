<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // although I'd rather not
    protected $fillable = [
        'model',
        'year',
        'salesperson_email',
        'manufacturer_id'
    ];
}
