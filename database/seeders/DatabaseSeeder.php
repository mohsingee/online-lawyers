<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SettingsSeeder::class);

        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@user.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin', // make sure you have a 'role' column in users table
        ]);

        // Create an super admin
        User::create([
            'name' => 'Supe Admin',
            'email' => 'super@admin.com',
            'password' => Hash::make('12345678'),
            'role' => 'creator', // make sure you have a 'role' column in users table
        ]);
    }
}
