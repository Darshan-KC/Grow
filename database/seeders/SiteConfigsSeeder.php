<?php

namespace Database\Seeders;

use App\Models\SiteConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteConfig::create([
            'facebook' => 'https://www.facebook.com/',
            'youtube' => 'https://www.youtube.com/',
            'instagram' => 'https://www.instagram.com/',
            'twitter' => 'https://twitter.com/',
            'linkedin' => 'https://www.linkedin.com/',
        ]);
    }
}
