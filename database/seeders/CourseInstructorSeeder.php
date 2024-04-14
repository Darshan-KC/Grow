<?php

namespace Database\Seeders;

use App\Models\CoursesInstructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoursesInstructor::create([
            'course_head'=>"Checkout New Releases Of Our Courses",
            'meet_instruction'=>"Meet Our Instructors"
        ]);
    }
}
