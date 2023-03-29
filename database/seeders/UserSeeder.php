<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "name" => "Admin",
                "email" => "admin@canary.com",
                "password" => bcrypt("admin"),
                "remember_token" => null,
                "created_at" => Carbon::now()->format("Y-m-d h:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d h:i:s"),
            ],
        ]);
    }
}
