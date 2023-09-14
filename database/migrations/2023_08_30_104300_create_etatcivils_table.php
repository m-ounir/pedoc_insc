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
        Schema::create('etatcivils', function (Blueprint $table) {
            $table->id();
            $table->string('cin')->nullable();
            $table->string('code_masar')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('nom_fr')->nullable();
            $table->string('prenom_fr')->nullable();
            $table->string('nom_ar')->nullable();
            $table->string('prenom_ar')->nullable();
            $table->string('lieu_nais_fr')->nullable();
            $table->string('lieu_nais_ar')->nullable();
            $table->string('pays_nais')->nullable();
            $table->string('adress')->nullable();
            $table->string('ville')->nullable();
            $table->string('tel')->nullable();
            $table->string('fonction')->nullable();
            $table->string('situation_f')->nullable();
            $table->string('sexe')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users');
            
        }); 

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etatcivils');
    }
};
