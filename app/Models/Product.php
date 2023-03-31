<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'no_item',
        'kode_barang'
    ];
    
    public function toSearchableArray(): array
    {
        return [
            'no_item' => $this->no_item,
            'kode_barang' => $this->kode_barang,
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
