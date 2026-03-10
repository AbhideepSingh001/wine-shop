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
        Schema::create('wines', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('brand')->nullable();
            $table->string('country')->nullable();

            $table->year('year')->nullable();

            $table->decimal('alcohol_percentage', 4, 1)->nullable();

            $table->decimal('price', 10, 2)->nullable();

            $table->float('rating')->nullable();

            $table->text('description')->nullable();

            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wines');
    }
};
