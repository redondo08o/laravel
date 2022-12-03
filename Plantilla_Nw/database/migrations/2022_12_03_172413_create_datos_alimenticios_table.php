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
        Schema::create('datos_alimenticios', function (Blueprint $table) {
            $table->id();
            $table->text('ali_frutas_pre');
            $table->text('ali_verduras_pre');
            $table->text('ali_cereales_pre');
            $table->text('ali_lacteos_pre');
            $table->text('ali_leguminozas_pre');
            $table->text('ali_frutas_npre');
            $table->text('ali_verduras_npre');
            $table->text('ali_cereales_npre');
            $table->text('ali_lacteos_npre');
            $table->text('ali_leguminozas_npre');
            $table->string('ali_donde_consume_comida');
            $table->string('ali_elabora_comida');
            $table->string('ali_elabora_comida_desc');
            $table->string('ali_consume_chatarra');
            $table->unsignedBigInteger('ali_pre_id');
            $table->foreign('ali_pre_id')->references('id')->on('t_datos_pers');

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
        Schema::dropIfExists('datos_alimenticios');
    }
};
