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
        Schema::create('proizvod', function (Blueprint $table) {
            $table->id();
            $table->string('naziv')->nullable();
            $table->string('cijena')->nullable();
            $table->text('opis');

            $table->unsignedBigInteger('market_id');
            $table->foreign('market_id')->references('id')->on('market');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proizvod');
    }
};
