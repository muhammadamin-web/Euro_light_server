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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('slug_ru');
            $table->string('slug_uz');
            $table->text('description_ru');
            $table->text('description_uz');
            $table->text('meta_description_ru');
            $table->text('meta_description_uz');
            $table->string('tags_uz')->nullable();
            $table->string('tags_ru')->nullable();
            $table->string('image_path')->nullable();
            $table->string('image_name')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
