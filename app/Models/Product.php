<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_short_des',
        'product_long_des',
        'price',
        'product_category_name',
        'product_category_id',
        'product_img',
        'quantity',
        'slug',
    ];
}
