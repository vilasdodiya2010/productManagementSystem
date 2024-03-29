<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'product_name',
        'product_detail',
        'image',
        'price',
    ];
}
