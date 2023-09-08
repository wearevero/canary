<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table("categorys")->insert([
            [
                "nama_kategori" => "Ear Stud",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Pallisc (B)",
                "id_master_category" => 2,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Ring Bracelet",
                "id_master_category" => 3,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Hollow",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Lock",
                "id_master_category" => 5,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY R",
                "id_master_category" => 6,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY LK",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY N",
                "id_master_category" => 2,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY B",
                "id_master_category" => 3,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Choker",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex Ring",
                "id_master_category" => 5,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Tennis Necklace",
                "id_master_category" => 6,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Tennis Bracelet",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex Earing",
                "id_master_category" => 2,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex Bracelet",
                "id_master_category" => 3,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Rail Ring",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Rail Bracelet",
                "id_master_category" => 5,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Charm",
                "id_master_category" => 6,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Ring",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Pendant",
                "id_master_category" => 2,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Necklace",
                "id_master_category" => 3,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Earring",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Bracelet",
                "id_master_category" => 5,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
        ]);
    }
}
