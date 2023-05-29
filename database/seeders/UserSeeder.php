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
                'name' => 'Administrator',
                'email' => 'admin@sample.com',
                'email_verified_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'password' => bcrypt('admin'),
                'role_id' => 1,
                'role_name' => 'super user',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Krido Pambudi',
                'email' => 'krido@sample.com',
                'email_verified_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'password' => bcrypt('krido'),
                'role_id' => 1,
                'role_name' => 'super user',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@sample.com',
                'email_verified_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'password' => bcrypt('guest'),
                'role_id' => 2,
                'role_name' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
        ]);
    }
}
