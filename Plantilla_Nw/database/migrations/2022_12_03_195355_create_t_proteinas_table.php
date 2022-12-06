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
        Schema::create('t_proteinas', function (Blueprint $table) {
            $table->id();
            $table->text('pro_uid');
            $table->decimal('pro_gramos');
            $table->decimal('pro_kcal');
            $table->decimal('pro_%');
            $table->decimal('pro_g_kg');
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
        Schema::dropIfExists('t_proteinas');
    }
};
