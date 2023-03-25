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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('caption');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->integer('zoom')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('destination_id')->constrained('destinations')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('subregion_id')->constrained('sub_regions')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
