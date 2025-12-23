<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'weight',
        'karat',
        'price',
        'stock',
        'image',
        'rating'
    ];

    // Format harga
    public function getPriceFormattedAttribute()
    {
        return 'IDR ' . number_format($this->price, 0, ',', '.');
    }

    // Label kategori (untuk class filter)
    public function getCategoryClassAttribute()
    {
        return match ($this->category) {
            'cincin' => 'breakfast',
            'gelang' => 'lunch',
            'anting' => 'dinner',
            default => 'all'
        };
    }
}
