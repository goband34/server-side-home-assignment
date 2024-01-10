<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Manufacturer;

class Car extends Model
{
    // although I'd rather not
    protected $fillable = [
        'model',
        'year',
        'salesperson_email',
        'manufacturer_id'
    ];

    public function manufacturer(): BelongsTo {
        return $this->belongsTo(Manufacturer::class);
    }
}
