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
        Schema::create('bac3s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->date('annee_bac3');
            $table->string('nombre_insc');
            $table->string('etab_bac3');
            $table->string('diplome_bac3');
            $table->string('specialite_bac3');
            $table->string('type_dip');
            $table->float('moyen_bac3');
            $table->float('s1');
            $table->float('s2');
            $table->float('s3');
            $table->float('s4');
            $table->float('s5');
            $table->float('s6');
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
        Schema::dropIfExists('bac3s');
    }
};
