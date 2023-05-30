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
        Schema::create('location_tours', function (Blueprint $table) {
            $table->id();
            $table->string('site');
            $table->string('slug');
            $table->string('latitud');
            $table->string('longitud');
            $table->integer('zoom')->default(13);
            $table->foreignId('tour_id')->constrained('tours')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_tours');
    }
};
