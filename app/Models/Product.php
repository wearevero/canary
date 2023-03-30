<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    public function toSearchableArray(): array
    {
        return [
            'no_item' => $this->no_item,
            'kode_barang' => $this->kode_barang,
        ];
    }

    protected $fillable = [
        'no_item',
        'kode_barang'
    ];
}
