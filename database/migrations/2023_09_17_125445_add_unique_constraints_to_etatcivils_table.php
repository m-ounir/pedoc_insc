<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('etatcivils', function (Blueprint $table) {
            $table->unique('cin');
            $table->unique('code_masar');
        });
    }

    public function down()
    {
        Schema::table('etatcivils', function (Blueprint $table) {
            $table->dropUnique(['cin']);
            $table->dropUnique(['code_masar']);
        });
    }
};
