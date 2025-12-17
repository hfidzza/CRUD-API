<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'nama',
        'description',
        'harga',
        'stock'
    ];

    // RELASI KE CATEGORY
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
