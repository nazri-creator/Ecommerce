<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;

    protected $table = 'products_variants';

    protected $fillable = [
        'product_id',
        'color_name',
        'color_code'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class, 'variant_id', 'id');
    }
}