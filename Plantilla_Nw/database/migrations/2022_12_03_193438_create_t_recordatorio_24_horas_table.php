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
        Schema::create('t_recordatorio_24_horas', function (Blueprint $table) {
            $table->id();
            $table->text('re_uid');
            $table->unsignedBigInteger('re_per_id');
            $table->longText('re_desayuno');
            $table->longText('re_merienda');
            $table->longText('re_almuerzo');
            $table->longText('re_meriendam');
            $table->longText('re_re_cena');
            $table->longText('re_otros');
            $table->timestamps();
            $table->foreign('re_per_id')->references('per_usu_id')->on('t_datos_pers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_recordatorio_24_horas');
    }
};
