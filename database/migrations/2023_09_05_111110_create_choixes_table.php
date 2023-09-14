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
        Schema::create('choixes', function (Blueprint $table) {
            // $table->unsignedBigInteger('user_id');
            // $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            // $table->unsignedBigInteger('formation_id');
            // $table->foreignId('formation_id')->references('id')->on('formations')->constrained()->onDelete('cascade');
            // $table->unsignedBigInteger('axe_id');
            // $table->foreignId('axe_id')->references('id')->on('axes_sujets')->constrained()->onDelete('cascade');
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('formation_id')->constrained('formations')->onDelete('cascade');
            $table->foreignId('axe_id')->constrained('axes_sujets')->onDelete('cascade');
            $table->unique(['user_id','formation_id','axe_id']);
            $table->timestamps();  
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choixes');
    }
};
