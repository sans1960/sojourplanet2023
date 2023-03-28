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
        Schema::create('sight_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sight_id')->constrained('sights')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sight_tag');
    }
};
