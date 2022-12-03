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
        Schema::create('antecedentes_familiares', function (Blueprint $table) {
            $table->id();
            $table->string('antfami_enfer_res_alerg');
            $table->string('antfami_canceres');
            $table->string('antfami_obesidad');
            $table->string('antfami_enfer_cardio');
            $table->string('antfami_diabetes');
            $table->longText('antfami_otros');
            $table->timestamps();
            $table->foreign('antfami_per_id')->references('per_usu_id')->on('t_datos_pers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedentes_familiares');
    }
};
