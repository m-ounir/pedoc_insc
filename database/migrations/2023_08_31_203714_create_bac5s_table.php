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
        Schema::create('bac5s', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->unique();
            $table->date('annee_bac5');
            $table->string('type_dip');
            $table->string('etab_bac5');
            $table->string('diplome_bac5');
            $table->string('specialite_bac5');
            $table->float('moyen_bac5');
            $table->float('s7');
            $table->float('s8');
            $table->float('s9');
            $table->float('s10');
            $table->string('montion');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bac5s');
    }
};
