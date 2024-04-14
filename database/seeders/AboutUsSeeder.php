<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Create fake data using the AboutUs model
        AboutUs::create([
            'hero_image' => $faker->imageUrl(),
            'title' => 'About Us',
            'title_description' => $faker->paragraph,
            'heading_1_title' => '#1 IT Training Company in Pokhara, Nepal',
            'heading_1_description' => $faker->paragraph,
            'heading_2_title' => '#1 IT Training Company in Pokhara, Nepal',
            'heading_2_description' => $faker->paragraph,
            'engage_user_number_1' => $faker->numberBetween(0, 100),
            'engage_user_title_1' => $faker->sentence,
            'engage_user_number_2' => $faker->numberBetween(0, 100),
            'engage_user_title_2' => $faker->sentence,
            'engage_user_number_3' => $faker->numberBetween(0, 100),
            'engage_user_title_3' => $faker->sentence,
            'engage_user_number_4' => $faker->numberBetween(0, 100),
            'engage_user_title_4' => $faker->sentence,
            'aboutus_image' => $faker->imageUrl(),
        ]);
    }
}
