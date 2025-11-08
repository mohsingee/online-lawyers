<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create([
            'site_name' => 'My Website',
            'phone' => '+92 300 1234567',
            'email' => 'info@mywebsite.com',
            'logo' => 'setting/default-logo.png',
            'address' => '123 Street, City, Country',
            'footer_text' => 'My Website. All Rights Reserved.',
        ]);
    }
}
