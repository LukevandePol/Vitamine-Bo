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
            $table->timestamps();
            $table->string('postcode');
            $table->string('huisnummer');
            $table->string('adres')->nullable();
            $table->string('plaatsnaam')->nullable();
            $table->string('gemeentenaam')->nullable();
            $table->string('provincienaam')->nullable();
            $table->enum('type',
                [
                    'bezorg',
                    'factuur',
                    'niet_gebruikt'
                ])->default('bezorg');
            $table->foreignId('klantgegevens_id')->constrained();
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
