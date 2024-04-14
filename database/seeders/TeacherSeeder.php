<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create fake data using the Teacher model
        for ($i = 0; $i < 10; $i++) { // You can adjust the loop count to create more teachers
            Teacher::create([
                'category' => $faker->word,
                'course_id' => $faker->numberBetween(1, 10), // Assuming you have courses with IDs from 1 to 10
                'instructor_id' => $faker->numberBetween(1, 10), // Assuming you have users with IDs from 1 to 10
            ]);
        }
    }
}
