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
        Schema::table('klantgegevens', function (Blueprint $table) {
            $table->unsignedBigInteger('bezorgAdres')->nullable();
            $table->unsignedBigInteger('factuurAdres')->nullable();
            $table->foreign('bezorgAdres')->references('id')->on('adres');
            $table->foreign('factuurAdres')->references('id')->on('adres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('klantgegevens', function (Blueprint $table) {
            //
        });
    }
};
