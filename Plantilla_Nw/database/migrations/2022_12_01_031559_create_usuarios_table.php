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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('usu_num_doc');
            $table->string('usu_tp_doc');
            $table->string('usu_rol');
            $table->longText('usu_contraseña');
            $table->string('usu_alias');
            $table->string('usu_correo');
            $table->longText('usu_uid');
            $table->integer('usu_est');
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
        Schema::dropIfExists('usuarios');
    }
};
