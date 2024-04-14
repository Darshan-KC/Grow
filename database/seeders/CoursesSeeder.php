<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create fake data using the Course model
        for ($i = 0; $i < 10; $i++) { // You can adjust the loop count as needed
            Course::create([
                'title' => $faker->sentence,
                'image' => $faker->imageUrl(),
                'feature_image' => $faker->imageUrl(),
                'duration' => $faker->randomFloat(2, 1, 100),
                'description' => $faker->paragraph,
            ]);
        }
    }
}
