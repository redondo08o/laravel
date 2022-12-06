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
        Schema::create('t_datos_pers', function (Blueprint $table) {
            $table->id();
            $table->text('per_uid');
            $table->unsignedBigInteger('per_usu_id');
            $table->date('per_fecha_nacimiento');
            $table->string('per_nombre');
            $table->string('per_apellido');
            $table->integer('per_edad');
            $table->timestamps();
            $table->foreign('per_usu_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_datos_pers');
    }
};
