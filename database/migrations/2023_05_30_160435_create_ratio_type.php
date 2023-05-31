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
        Schema::create('ratio_type', function (Blueprint $table) {
            $table->id();
             $table->foreignId('ratio_id')->constrained('ratios')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_ratio_type');
    }
};
