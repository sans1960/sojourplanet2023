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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('subtitle');
            $table->string('slug');
            $table->string('image');
            $table->string('caption');
            $table->text('description');
            $table->text('conclusion');
            $table->text('accommodation');
            $table->text('meals');
            $table->string('city_first');
            $table->string('city_last');
            $table->integer('duration')->nullable();
            $table->decimal('price', 10, 2)->nullable();

            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
