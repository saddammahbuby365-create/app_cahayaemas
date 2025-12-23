<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ======================
        // ADMIN
        // ======================
        User::create([
            'name' => 'Admin Toko Emas',
            'email' => 'admin@emas.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // ======================
        // USER
        // ======================
        User::create([
            'name' => 'User Pelanggan',
            'email' => 'user@emas.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
    }
}
