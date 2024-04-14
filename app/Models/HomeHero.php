<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHero extends Model
{
    use HasFactory;
    protected $fillable = ['logo_image',
    'logo_name', 'hero_image',  'hero_title',  'hero_subtitle',  'hero_description',   'course_info',   'footer_title_1', 'footer_title_2','footer_title_3',
          'copyrighter'];
}
