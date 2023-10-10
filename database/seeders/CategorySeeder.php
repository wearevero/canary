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
                "nama_kategori" => "Ear Stud (Earing Gorok)",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex Earing (Earing Kleci)",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Charm",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Mop E",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Hoop",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Huggies",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Fishhook",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "LB",
                "id_master_category" => 1,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            // Bracelet
            [
                "nama_kategori" => "Flex Bracelet (Chain)",
                "id_master_category" => 2,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Pallisc B (Pallisc)",
                "id_master_category" => 2,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Tennis Bracelet (Chain)",
                "id_master_category" => 2,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            // Necklace
            [
                "nama_kategori" => "Tennis (TN)",
                "id_master_category" => 3,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Chain",
                "id_master_category" => 3,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY R/Rantai Besar",
                "id_master_category" => 3,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            // Ring
            [
                "nama_kategori" => "Eternity",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Spin",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY R/Rantai Besar",
                "id_master_category" => 4,
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
                "nama_kategori" => "Pallisc",
                "id_master_category" => 4,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            // Choker
            [
                "nama_kategori" => "Open Cuff",
                "id_master_category" => 5,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "NT",
                "id_master_category" => 5,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Pallisc",
                "id_master_category" => 5,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            // Pendant
            [
                "nama_kategori" => "Pendant",
                "id_master_category" => 6,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
        ]);
    }
}
