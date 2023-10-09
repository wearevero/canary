<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCategory extends Model
{
    use HasFactory;
    protected $table = "master_categorys";
    protected $primaryKey = "id";

    public function sub_category()
    {
        return $this->hasMany(Category::class, 'id_master_category');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'id_main_category');
    }
}
