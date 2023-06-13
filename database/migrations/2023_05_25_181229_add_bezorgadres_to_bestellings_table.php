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
        Schema::table('bestellings', function (Blueprint $table) {
            $table->unsignedBigInteger('bezorgadres_id');

            $table->foreign('bezorgadres_id')
                ->references('id')
                ->on('adres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bestellings', function (Blueprint $table) {
            //
        });
    }
};
