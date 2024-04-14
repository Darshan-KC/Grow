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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name','50');
            $table->string('email','72')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password','255');
            $table->string('photo','255')->nullable();
            $table->string('address','255')->nullable();
            $table->string('contact','15')->nullable();
            $table->enum('role',['a','i','u'])->default('u');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
