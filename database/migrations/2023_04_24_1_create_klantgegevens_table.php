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
        Schema::create('klantgegevens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('kvkNummer');
            $table->String('telefoonnummer');
            $table->date('aanpassingBevestigdDatum')->nullable();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klantgegevens');
    }
};
