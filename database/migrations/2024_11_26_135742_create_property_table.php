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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('p_title');
            $table->string('p_price');
            $table->string('p_address');
            $table->string('p_bedroom');
            $table->string('p_bathroom');
            $table->string('p_parking');
            $table->string('p_area');
            $table->longText('p_description');
            $table->string('p_cover_img');
            $table->string('p_zillow_url');
            $table->string('p_category');
            $table->string('p_status');
            $table->string('p_slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
