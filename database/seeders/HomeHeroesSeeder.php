<?php

namespace Database\Seeders;

use App\Models\HomeHero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HomeHeroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create fake data using the HomeHero model
        HomeHero::create([
            'logo_image' => $faker->imageUrl(),
            'logo_name' => 'GROW',
            'hero_image' => $faker->imageUrl(),
            'hero_title' => 'Learn From Home',
            'hero_subtitle' => 'Education Courses',
            'hero_description' => $faker->paragraph,
            'course_info' => 'Checkout New Releases Of Our Courses',
            'footer_title_1' => 'Get In Touch',
            'footer_title_2' => 'Our Courses',
            'footer_title_3' => 'Quick Links',
            'copyrighter' => 'DEV',
        ]);
    }
}
