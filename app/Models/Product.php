<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'gambar',
        'title',
        'deskripsi',
        'harga',
        'slug',
        'is_active',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            if (! $product->slug) {
                $product->slug = Str::slug($product->title);
            }
        });
    }
}
