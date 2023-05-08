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
                'password' => bcrypt('admin'),
                'role' => 'Superuser',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Krido Pambudi',
                'email' => 'krido@sample.com',
                'password' => bcrypt('krido123'),
                'role' => 'Superuser',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@sample.com',
                'password' => bcrypt('guest123'),
                'role' => 'Regular User',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
        ]);
    }
}
