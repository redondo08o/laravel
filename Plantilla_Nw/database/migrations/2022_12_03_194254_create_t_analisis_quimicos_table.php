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
        Schema::create('t_analisis_quimicos', function (Blueprint $table) {
            $table->id();
            $table->string('factor_act');
            $table->unsignedBigInteger('per_id');
            $table->unsignedBigInteger('lipi2_id');
            $table->unsignedBigInteger('personales_id');
            $table->foreign('per_id')->references('id')->on('t_datos_pers');
            $table->foreign('lipi2_id')->references('id')->on('t_lipi2s');
            $table->foreign('personales_id')->references('id')->on('t_datos_pers');
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
        Schema::dropIfExists('t_analisis_quimicos');
    }
};
