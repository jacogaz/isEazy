<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function products(): HasMany{
        return $this->hasMany(Product::class)->using(Stock::class);
    }
}
