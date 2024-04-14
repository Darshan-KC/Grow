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
        Schema::create('home_heroes', function (Blueprint $table) {
            $table->id();
            $table->string('logo_image','255');
            $table->string('logo_name','255')->default('GROW');
            $table->string('hero_image','255');
            $table->string('hero_title','255')->default('Learn From Home');
            $table->string('hero_subtitle','255')->default('Education Courses');
            $table->text('hero_description')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae adipisci quasi non quidem, sequi odio natus eos esse alias atque!');
            $table->string('course_info','255')->default('Checkout New Releases Of Our Courses');
            $table->string('footer_title_1','150')->default('Get In Touch');
            $table->string('footer_title_2','150')->default('Our Courses');
            $table->string('footer_title_3','150')->default('Quick Links');
            $table->string('copyrighter','150')->default('DEV');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_heroes');
    }
};
