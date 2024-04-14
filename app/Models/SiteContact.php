<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContact extends Model
{
    use HasFactory;
    protected $fillable=[
        'number_heading',
        'number',
        'email_heading',
        'email',
        'location_heading',
        'location_name',
        'location_value',
        'contact_message_heading',
        'contact_message_subhead'
    ];
}
