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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->text('seg_uid');
            $table->string('seg_fch_valoracion');
            $table->decimal('seg_peso_usu');
            $table->decimal('seg_peso_act');
            $table->decimal('seg_talla');
            $table->decimal('seg_edad');
            $table->decimal('seg_pli_tricipital');
            $table->decimal('seg_pli_abdominal');
            $table->decimal('seg_pli_subescapular');
            $table->decimal('seg_pli_suprailiaco');
            $table->decimal('seg_circ_branquial');
            $table->decimal('seg_circ_abdominal');
            $table->decimal('seg_circ_muslo');
            $table->decimal('seg_circ_cuello');
            $table->decimal('seg_circ_cintura');
            $table->decimal('seg_circ_cadera_max');
            $table->unsignedBigInteger('seg_pre_id');
            $table->foreign('seg_pre_id')->references('id')->on('t_datos_pers');


            

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
        Schema::dropIfExists('seguimientos');
    }
};
