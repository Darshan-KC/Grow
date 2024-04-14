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
        Schema::create('site_configs', function (Blueprint $table) {
            $table->id();
            $table->string('facebook','255')->default('https://www.facebook.com/');
            $table->string('youtube','255')->default('https://www.facebook.com/');
            $table->string('instagram','255')->default('https://www.facebook.com/');
            $table->string('twitter','255')->default('https://www.facebook.com/');
            $table->string('linkedin','255')->default('https://www.facebook.com/');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_configs');
    }
};
