<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create fake data using the User model
        for ($i = 0; $i < 10; $i++) { // You can adjust the loop count to create more users
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // Hash the default password using bcrypt
                'photo' => $faker->imageUrl(),
                'address' => $faker->address,
                'contact' => $faker->numerify(str_repeat('#', 10)),
                'role' => $faker->randomElement(['a', 'i', 'u']),
            ]);
        }
    }
}
