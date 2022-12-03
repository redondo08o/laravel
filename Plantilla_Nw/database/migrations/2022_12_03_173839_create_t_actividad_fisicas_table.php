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
        Schema::create('t_actividad_fisicas', function (Blueprint $table) {
            $table->id();
            $table->string('actf_tiempo');
            $table->longText('actf_va_gym_o_ deporte');
            $table->string('actf_frecuencia_actfisica');
            $table->timestamps();
            $table->foreign('actf_per_id')->references('per_usu_id')->on('t_datos_pers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_actividad_fisicas');
    }
};
