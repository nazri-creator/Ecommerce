<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
        use HasFactory;

    protected $fillable = [
        'product_id',
        'color_name',
        'color_code'
    ];

    protected $table = 'product_vaiants';
}
