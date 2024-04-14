<?php

namespace Database\Seeders;

use App\Models\SiteContact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteContact::create([
            'number_heading' => 'Number',
            'number' => '+9779819113548',
            'email_heading' => 'Email',
            'email' => 'sagar@gmail.com',
            'location_heading' => 'Location',
            'location_name' => 'Pokhara, PNC',
            'location_value' => 'https://www.google.com/maps/place/28.241962830603555,83.99269748655203',
            'contact_message_heading' => 'NEED HELP?',
            'contact_message_subhead' => 'Send Us A Message',
        ]);
    }
}
