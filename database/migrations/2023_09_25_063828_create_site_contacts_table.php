<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('number_heading','200')->default('Number');
            $table->string('number','20')->default('+9779819113548');
            $table->string('email_heading','200')->default('Email');
            $table->string('email','72')->default('sagar@gmail.com');
            $table->string('location_heading','200')->default('Location');
            $table->string('location_name','200')->default('Pokhara, PNC');
            $table->string('location_value','255')->default('https://www.google.com/maps/place/28.241962830603555, 83.99269748655203');
            $table->string('contact_message_heading','255')->default('NEED HELP?');
            $table->string('contact_message_subhead','255')->default('Send Us A Message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contacts');
    }
};
