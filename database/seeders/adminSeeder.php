<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'tejus',
            'email' => 'tejus@gamil.com',
            'email_verified_at' => null,
            'password' => Hash::make('tejus123'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan admin lain jika diperlukan
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gamil.com',
            'email_verified_at' => null,
            'password' => Hash::make('admin1234'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan admin lain jika diperlukan
        // ...
    }
}
