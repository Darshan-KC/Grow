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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image','255');
            $table->string('title','200')->default('About Us');
            $table->text('title_description')->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla gravida, tellus ac efficitur faucibus, mi metus cursus mi, at fringilla mauris magna nec libero.');
            $table->string('heading_1_title')->default('#1 IT Traning Company in Pokhara, Nepal');
            $table->text('heading_1_description')->default('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi nulla nobis amet illum sunt id velit veritatis provident? Praesentium, nulla totam. Maxime vel aliquam voluptates similique quas. Corrupti consequuntur commodi iusto neque, architecto ex nobis maxime quaerat quia. Consequuntur iste dignissimos, iusto nesciunt ea corporis. Cum impedit explicabo repellat aut.');
            $table->string('heading_2_title')->default('#1 IT Traning Company in Pokhara, Nepal');
            $table->text('heading_2_description')->default('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi nulla nobis amet illum sunt id velit veritatis provident? Praesentium, nulla totam. Maxime vel aliquam voluptates similique quas. Corrupti consequuntur commodi iusto neque, architecto ex nobis maxime quaerat quia. Consequuntur iste dignissimos, iusto nesciunt ea corporis. Cum impedit explicabo repellat aut.');
            $table->integer('engage_user_number_1')->default(0);
            $table->string('engage_user_title_1')->nullable();
            $table->integer('engage_user_number_2')->default(0);
            $table->string('engage_user_title_2')->nullable();
            $table->integer('engage_user_number_3')->default(0);
            $table->string('engage_user_title_3')->nullable();
            $table->integer('engage_user_number_4')->default(0);
            $table->string('engage_user_title_4')->nullable();
            $table->string('aboutus_image','255');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
