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
        Schema::create('adres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->string('postcode');
            $table->string('huisnummer');
            $table->string('weergavenaam')->nullable();
            $table->string('straatnaam')->nullable();
            $table->string('woonplaatsnaam')->nullable();
            $table->string('provincienaam')->nullable();
            $table->enum('voorkeur_type',
                [
                    'bezorg',
                    'factuur',
                    'niet_voorkeur'
                ])->default('niet_voorkeur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adres');
    }
};
