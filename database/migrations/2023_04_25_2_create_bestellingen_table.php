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
            $table->foreignId('klantgegevens_id')->constrained();
            $table->timestamps();
            $table->integer('prijsInCenten');
            $table->string('reden')->nullable();
            $table->date('goedgekeurdDatum')->nullable();
            $table->date('bezorgDatum');
            $table->date('betaalDatum')->nullable();
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
