<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Sekretaris Kelas',
                'email' => 'sekretaris@example.com',
                'password' => Hash::make('password'),
                'role' => 'sekretaris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Murid 1',
                'email' => 'murid1@example.com',
                'password' => Hash::make('password'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wali Kelas',
                'email' => 'walikelas@example.com',
                'password' => Hash::make('password'),
                'role' => 'wali_kelas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
