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
        Schema::create('courses_instructors', function (Blueprint $table) {
            $table->id();
            $table->string('course_head','150')->default('Checkout New Releases Of Our Courses');
            $table->string('meet_instruction','150')->default('Meet Our Instructors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_instructors');
    }
};
