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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('trait')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
            $table->string('city')->nullable();
            $table->string('legal');
            $table->foreignId('country_code_id')->constrained('country_codes');
            $table->string('ipAdress');
            $table->string('zipcode')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
