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
        Schema::create('attatchements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // Each user has one attachment
            $table->binary('cin');
            $table->binary('cv');
            $table->binary('bac');
            $table->binary('bac3');
            $table->binary('note_bac3');
            $table->binary('bac5');
            $table->binary('note_bac5');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attatchements');
    }
};
