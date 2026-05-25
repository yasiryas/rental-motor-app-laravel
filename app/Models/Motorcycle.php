<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'brand',
        'year',
        'plate_number',
        'price_per_day',
        'status',
        'description'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
