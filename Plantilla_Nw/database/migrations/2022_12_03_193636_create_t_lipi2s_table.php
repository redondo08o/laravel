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
        Schema::create('t_lipi2s', function (Blueprint $table) {
            $table->id();
            $table->text('lipi2_uid');
            $table->decimal('lipi2_gramos');
            $table->decimal('lipi2_kcal');
            $table->decimal('lipi2_%');
            $table->decimal('lipi2_g_kg');
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
        Schema::dropIfExists('t_lipi2s');
    }
};
