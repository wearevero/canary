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
        'id_main_category',
        'id_sub_category',
        'image',
        'size',
        'size_stone',
        'qty_stone',
    ];

    public function toSearchableArray(): array
    {
        return [
            'no_item' => $this->no_item,
            'id_main_category' => $this->id_main_category,
            'id_sub_category' => $this->id_sub_category,
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_sub_category');
    }

    public function main_category()
    {
        return $this->belongsTo(MasterCategory::class, 'id');
    }
}
