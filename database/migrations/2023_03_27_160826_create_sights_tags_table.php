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
        Schema::create('sights_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sights_id')->constrained('sights')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('tags_id')->constrained('tags')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sights_tags');
    }
};
