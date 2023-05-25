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
        Schema::create('bestellings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->integer('prijs_in_centen')->nullable();
            $table->string('reden')->nullable();
            $table->dateTimeTz('controle_datum')->nullable();
            $table->dateTimeTz('betaal_datum')->nullable();

//            $table->unsignedBigInteger('bezorgadres_id');
//            $table->unsignedBigInteger('factuuradres_id')->nullable();
//
//            $table->foreign('bezorgadres_id')
//                ->references('id')
//                ->on('adres');
//            $table->foreign('factuuradres_id')
//                ->references('id')
//                ->on('adres');
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
