<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function motorcycles()
    {
        return $this->hasMany(Motorcycle::class);
    }
}
