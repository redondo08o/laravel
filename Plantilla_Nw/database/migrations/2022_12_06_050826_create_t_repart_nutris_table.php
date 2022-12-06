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
        Schema::create('t_repart_nutris', function (Blueprint $table) {
            $table->id();
            $table->text('trepar_uid');
            $table->integer('desayuno_repar_nutri');
            $table->integer('mm_repar_nutricol');
            $table->integer('almuerzo_repar_nutricol');
            $table->integer('mt_repar_nutricol');
            $table->integer('cena_repar_nutricol');
            $table->integer('mn_repar_nutricol');
            $table->unsignedBigInteger('id_ana_quim');
            $table->unsignedBigInteger('t_grup_alim_id_grup_alim');
            $table->foreign('id_ana_quim')->references('id')->on('t_analisis_quimicos');
            $table->foreign('t_grup_alim_id_grup_alim')->references('id')->on('t_grup_alim');
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
        Schema::dropIfExists('t_repart_nutris');
    }
};
