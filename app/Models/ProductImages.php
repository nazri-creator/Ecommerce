<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'variant_id',
        'image_url',
        'is_primary'
    ];

    protected $table = 'products_image';

    public function variant()
    {
        return $this->belongsTo(ProductVariants::class, 'variant_id', 'id');
    }
    
}
