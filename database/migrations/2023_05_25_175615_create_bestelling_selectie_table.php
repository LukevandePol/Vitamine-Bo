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
        Schema::create('bestelling_selectie', function (Blueprint $table) {
            $table->unsignedBigInteger('bestelling_id')->nullable();
            $table->unsignedBigInteger('selectie_id');
            $table->integer('aantal');
            $table->timestamps();

            $table->foreign('bestelling_id')
                ->references('id')
                ->on('bestellings')->onDelete('cascade');

            $table->foreign('selectie_id')
                ->references('id')
                ->on('selecties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestelling_selectie');
    }
};
