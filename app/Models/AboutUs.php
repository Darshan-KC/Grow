<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable=[
        'hero_image',
        'title',
        'title_description',
        'heading_1_title',
        'heading_1_description',
        'heading_2_title',
        'heading_2_description',
        'engage_user_number_1',
        'engage_user_title_1',
        'engage_user_number_2',
        'engage_user_title_2',
        'engage_user_number_3',
        'engage_user_title_3',
        'engage_user_number_4',
        'engage_user_title_4',
        'aboutus_image'
    ];
}
