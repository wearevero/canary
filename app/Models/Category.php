<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categorys";
    protected $primaryKey = "id";

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function catalog()
    {
        return $this->hasMany(Catalogue::class);
    }

    public function main_category()
    {
        return $this->belongsTo(MasterCategory::class);
    }
}
