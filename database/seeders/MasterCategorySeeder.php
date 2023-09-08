<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table("master_categorys")->insert([
            [
                'nama_category' => 'Earing',
                'slug' => 'earing',
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                'nama_category' => 'Bracelet',
                'slug' => 'bracelet',
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                'nama_category' => 'Necklace',
                'slug' => 'necklace',
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                'nama_category' => 'Ring',
                'slug' => 'ring',
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                'nama_category' => 'Choker',
                'slug' => 'choker',
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                'nama_category' => 'Pendant',
                'slug' => 'pendant',
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ]
        ]);
    }
}
