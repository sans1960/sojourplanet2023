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
        Schema::table('countries', function (Blueprint $table) {
            $table->string('population')->nullable();
            $table->string('capital')->nullable();
            $table->string('language')->nullable();
            $table->string('currency')->nullable();
            $table->string('time_difference')->nullable();
            $table->string('best_times')->nullable();
            $table->text('sidebody')->nullable();
            $table->text('information')->nullable();
            $table->text('nearby')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn(['population', 'capital', 'language', 'currency', 'time_difference', 'best_time', 'sibebody', 'information', 'nearby']);
        });
    }
};
