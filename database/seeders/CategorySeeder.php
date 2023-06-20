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
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Pallisc (B)",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Ring Bracelet",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Hollow",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Lock",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY R",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY LK",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY N",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "King's NY B",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Choker",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex Ring",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Tennis Necklace",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Tennis Bracelet",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex Earing",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Flex Bracelet",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Rail Ring",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Rail Bracelet",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Charm",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Ring",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Pendant",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Necklace",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Earring",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
            [
                "nama_kategori" => "Bracelet",
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
        ]);
    }
}
