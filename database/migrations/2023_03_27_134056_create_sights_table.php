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
        Schema::create('sights', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('extract');
            $table->text('body');
            $table->string('image');
            $table->string('caption');
            $table->string('latitud');
            $table->string('longitud');
            $table->integer('zoom');
            $table->foreignId('destination_id')->constrained('destinations')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('subregion_id')->constrained('sub_regions')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('categorysight_id')->constrained('category_sights')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sights');
    }
};
