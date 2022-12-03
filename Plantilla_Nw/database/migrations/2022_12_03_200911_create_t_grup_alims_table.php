<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_grup_alim', function (Blueprint $table) {
            $table->id();
            $table->string('alim_grup_tp');
            $table->string('alim_grup_cho');
            $table->string('alim_grup_lipi2');
            $table->string('alim_grup_proteinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_grup_alims');
    }
};
