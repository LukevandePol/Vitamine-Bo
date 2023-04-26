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

        Schema::create('bestellings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('prijsInCenten');
            $table->date('bezorgDatum');
            $table->date('betaalDatum')->nullable();
            $table->unsignedBigInteger('bezorgAdres')->references('id')->on('adres');
            $table->unsignedBigInteger('factuurAdres')->references('id')->on('adres')->nullable();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestellings');
    }
};