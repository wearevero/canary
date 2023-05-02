<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $table = 'products';

    protected $fillable = [
        'no_item',
        'id_kategori',
        'image',
        'size',
        'size_stone',
        'qty_stone',
    ];

    public function toSearchableArray(): array
    {
        return [
            'no_item' => $this->no_item,
            'id_kategori' => $this->id_kategori,
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori');
    }
}
