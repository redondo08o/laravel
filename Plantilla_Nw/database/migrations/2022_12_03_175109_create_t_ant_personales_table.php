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
        Schema::create('t_ant_personales', function (Blueprint $table) {
            $table->id();
            $table->text('antp_uid');
            $table->unsignedBigInteger('antper_per_id');
            $table->string('antper_opera_si_no');
            $table->string('antper_medi_si_no');
            $table->longText('antper_sustancia_descp');
            $table->string('antper_diarrea');
            $table->string('antper_alerg_med');
            $table->string('antper_estreñimiento');
            $table->string('antper_gastritis');
            $table->string('antper_ulcera_mauseas');
            $table->string('antper_est_emba');
            $table->string('antper_vomitos');
            $table->string('antper_dolor_abd');
            $table->string('antper_meses_gestion');
            $table->timestamps();
            $table->foreign('antper_per_id')->references('per_usu_id')->on('t_datos_pers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_ant_personales');

    }
};
