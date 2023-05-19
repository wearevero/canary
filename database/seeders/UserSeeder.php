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
                'name' => 'Admin Sample System',
                'email' => 'admin@sample.com',
                'email_verified_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'password' => bcrypt('admin'),
                'id_role' => 1,
                'name_role' => 'administrator',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Krido Pambudi',
                'email' => 'krido@sample.com',
                'email_verified_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'password' => bcrypt('krido'),
                'id_role' => 1,
                'name_role' => 'developer',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@sample.com',
                'email_verified_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'password' => bcrypt('guest'),
                'id_role' => 2,
                'name_role' => 'regular',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
        ]);
    }
}
