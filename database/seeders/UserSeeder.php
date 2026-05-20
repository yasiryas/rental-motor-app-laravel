<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'phone' => '081234567890',
            'is_verified' => true,
            'email_verified_at' => now(),
        ]);

        $admin->assignRole('super_admin');
    }
}
