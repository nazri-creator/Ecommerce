<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
        use HasFactory;
    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'description',
        'base_price',
        'is_active'
    ];

    protected $table = 'products';
}
