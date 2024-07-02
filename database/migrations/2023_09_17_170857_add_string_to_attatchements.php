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
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('cin'); // Change 'binary' to 'string'
            $table->string('cv');  // Change 'binary' to 'string'
            $table->string('bac'); // Change 'binary' to 'string'
            $table->string('bac3'); // Change 'binary' to 'string'
            $table->string('note_bac3'); // Change 'binary' to 'string'
            $table->string('bac5'); // Change 'binary' to 'string'
            $table->string('note_bac5'); // Change 'binary' to 'string'
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attatchements');
    }
};
