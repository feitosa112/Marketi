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
        Schema::create('market', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('adresa')->nullable();
            $table->string('broj_telefona')->nullable();

            $table->unsignedBigInteger('grad_id');
            $table->foreign('grad_id')->references('id')->on('grad');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market');
    }
};
