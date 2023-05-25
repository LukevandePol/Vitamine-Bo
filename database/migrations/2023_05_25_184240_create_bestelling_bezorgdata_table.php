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
        Schema::create('bestelling_bezorgdatum', function (Blueprint $table) {
            $table->unsignedBigInteger('bestelling_id');
            $table->unsignedBigInteger('bezorgdatum_id');
            $table->timestamps();

            $table->foreign('bestelling_id')
                ->references('id')
                ->on('bestellings')->onDelete('cascade');

            $table->foreign('bezorgdatum_id')
                ->references('id')
                ->on('bezorgdata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestelling_bezorgdatum');
    }
};
