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
}
