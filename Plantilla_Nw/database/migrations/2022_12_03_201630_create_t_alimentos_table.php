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
        Schema::create('t_alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nom_alimento');
            $table->unsignedBigInteger('id_grup');
            $table->foreign('id_grup')->references('id')->on('t_grup_alim');
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
        Schema::dropIfExists('t_alimentos');
    }
};
