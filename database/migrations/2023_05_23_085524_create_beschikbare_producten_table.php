<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beschikbaar_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naam');
            $table->json('inhoud')->nullable();
            $table->string('afbeelding_pad')->nullable();
            $table->boolean('zichtbaar')->nullable();
            $table->string('smaak')->nullable();
            $table->string('volume')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beschikbaar_products');
    }
};
