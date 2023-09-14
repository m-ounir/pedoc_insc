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
        Schema::create('axes_sujets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formation_id');
            $table->string('nom_axe');
            $table->string('encadrant');
            $table->foreign('formation_id')->references('id')->on('formations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('axes_sujets');
    }
};
