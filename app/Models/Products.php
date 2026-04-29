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

    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brand_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
