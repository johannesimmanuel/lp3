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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('category_id')->nullable();
            $table->string('title');
            $table->string('title_id')->nullable();
            $table->text('tagline')->nullable();
            $table->text('tagline_id')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('description_id')->nullable();
            $table->json('features')->nullable();
            $table->json('features_id')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
