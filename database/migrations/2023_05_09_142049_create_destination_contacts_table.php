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
        Schema::create('destination_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('trait')->nullable();
            $table->string('name');
            $table->foreignId('destination_id')->constrained('destinations')->onUpdate('cascade')
            ->onDelete('cascade');
         
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('legal');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('duration')->nullable();
            $table->string('season')->nullable();
            $table->string('travelers')->nullable();
            $table->string('children')->nullable();
            $table->string('type')->nullable();
            $table->string('romantic')->nullable();
            $table->string('mobility')->nullable();
            $table->text('countries')->nullable();
       
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_contacts');
    }
};
