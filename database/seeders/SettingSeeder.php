<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'fb' => '#',
                'twt' => '#',
                'ig' => '#',
                'google' => '#',
                'linked' => '#',
                'yt' => '#',
                'site_title' => 'SMK Wikrama Bogor',
                'longitude_latitude' => '#',
                'address' => '#',
                'telp' => '#',
                'created_at' => now(),
            ],
        ];

        Setting::insert($settings);
    }
}
