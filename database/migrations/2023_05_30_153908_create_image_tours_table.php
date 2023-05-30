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
        Schema::create('image_tours', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('tour_id')->constrained('tours')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('caption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_tours');
    }
};
